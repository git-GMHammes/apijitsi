<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Outras meta tags e estilos aqui -->
    <script src="<?= base_url() . 'assets/jquery/jquery-3.5.1.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/jitsi/external_api.js' ?>"></script>
    <title>Main</title>
</head>

<body>
    <header>
        <h1>Template Principal</h1>
        <?php (DEBUG_MY_PRINT) ? (myPrint('src\app\Views\meet\template\main.php', 'Line: 14', true)) : (NULL); ?>
    </header>
    <main>
        <?php if ($loadView !== array()) : ?>
            <?php foreach ($loadView as $getView) : ?>
                <?php
                echo view($getView);
                ?>
            <?php endforeach ?>
        <?php else : ?>
            <h1>Não foi passado nenhma view!</h1>
        <?php endif ?>
    </main>
    <footer>
        <p>&copy; 2023 PRODERJ. Todos os direitos reservados.</p>
        <?php
        include_once('script/room_jitsi.php');
        ?>
    </footer>
</body>

</html>