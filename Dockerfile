FROM php:7.4-apache

# Atualizar lista de pacotes e instalar dependências necessárias
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    libpng-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    unixODBC-dev || true

# Instala dependências para a extensão intl
RUN apt-get install -y libicu-dev

# Instala a extensão intl
RUN docker-php-ext-install intl

# Instale as extensões PHP separadamente
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install exif

# Ativa o mod_rewrite para o Apache
RUN a2enmod rewrite

# Define o nome do servidor para suprimir avisos
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copia o app e altera permissões
COPY ./src /var/www/html/catasrp


# Modifica a configuração do DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/catasrp/public


RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN chown -R www-data:www-data /var/www
RUN echo '<Directory /var/www/html/catasrp/>' >> /etc/apache2/apache2.conf && \
    echo '   Options Indexes FollowSymLinks' >> /etc/apache2/apache2.conf && \
    echo '   AllowOverride All' >> /etc/apache2/apache2.conf && \
    echo '   Require all granted' >> /etc/apache2/apache2.conf && \
    echo '</Directory>' >> /etc/apache2/apache2.conf
