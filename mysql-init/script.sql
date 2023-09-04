CREATE DATABASE IF NOT EXISTS `catasrp` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `catasrp`;

CREATE TABLE IF NOT EXISTS `adherent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `administrative_unit_id` int DEFAULT NULL COMMENT 'id unidade administrativa',
  `minute_id` int DEFAULT NULL COMMENT 'id ata',
  `condition_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'id conducao situacao',
  `quantity_items` int DEFAULT NULL COMMENT 'quantidade de itens',
  `acquisition` decimal(20,2) DEFAULT NULL COMMENT 'aquisicao',
  `percentage` decimal(20,1) DEFAULT NULL COMMENT 'percentagem',
  `electronic_process_data` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci COMMENT 'dados do processo eletronico',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `adherent_siga` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `quantity_items` int NOT NULL COMMENT 'quantidade itens',
  `adherent_id` int DEFAULT NULL COMMENT 'id aderente',
  `minute_id` int DEFAULT NULL COMMENT 'id ata',
  `siga_id` int DEFAULT NULL COMMENT 'id siga',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `administrative_unit` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `position` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'posicao',
  `type` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'tipo',
  `federal_unit` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'unidade federal uf',
  `initials_name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'sigla',
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'nome',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_group_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_permission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content_type_id` int NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_user_groups` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `group_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `auth_user_user_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `condition` (
  `id_slug` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'id slug',
  `condition` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'condicao',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `django_admin_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint unsigned NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `django_content_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `django_migrations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL,
  PRIMARY KEY (`session_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `menu_object` (
  `order` int DEFAULT NULL COMMENT 'ordem',
  `id_slug_menu` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'id menu',
  `label` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'rotulo',
  `position` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'posicao',
  `url` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'url',
  `blank` varchar(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'nova janela',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido Quando',
  PRIMARY KEY (`id_slug_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `minutes_prices_registration` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `amount` decimal(20,2) DEFAULT NULL COMMENT 'total',
  `effective_date` date DEFAULT NULL COMMENT 'data inicial',
  `end_term` date DEFAULT NULL COMMENT 'data final',
  `process` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'processo',
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci COMMENT 'descricao',
  `total_amount_members` decimal(20,2) DEFAULT NULL COMMENT 'total de participantes',
  `total_amount_adherent` decimal(20,2) DEFAULT NULL COMMENT 'total de aderentes',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `participant` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `administrative_unit_id` int DEFAULT NULL COMMENT 'id uniade administrativa',
  `minute_id` int DEFAULT NULL COMMENT 'id ata',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE IF NOT EXISTS `profile` (
  `id_slug_profile` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'id rotulo',
  `label` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'rotulo',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id_slug_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `profile_menu_object` (
  `id_profile_menu_object` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'id perfil menu',
  `slug_profile_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'perfil id',
  `slug_menu_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'menu id',
  `created_at` date DEFAULT NULL COMMENT 'Criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'Atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'Excuido Quando',
  PRIMARY KEY (`id_profile_menu_object`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `siga` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `object_description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci COMMENT 'descricao objeto',
  `doble` int DEFAULT NULL COMMENT 'dobro',
  `pls` int DEFAULT NULL COMMENT 'pls',
  `per_cent_50` decimal(20,1) DEFAULT NULL COMMENT '50 por cento',
  `leftover` int DEFAULT NULL COMMENT 'sobra',
  `id_siga` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'id siga',
  `adherent` decimal(20,4) DEFAULT NULL COMMENT 'aderente',
  `created_at` date DEFAULT NULL COMMENT 'criado quando',
  `updated_at` date DEFAULT NULL COMMENT 'atualizado quando',
  `deleted_at` date DEFAULT NULL COMMENT 'excuido quando',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;