<div class="bg-light">
    <div class="container">
        <div class="display-4 text-center py-5">
            Welcome To <span class="fw-bold border-bottom border-5 d-inline-block"><?php Config::load(Config::$site_name) ?></span>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="text-center pb-5">
        <img src="./img/logo.jpg" alt="Logo" style="width: 200px;">
    </div>
    <div class="text-center mb-5">
        <a class="btn-lg btn btn-outline-primary" href="<?php echo $router ? '#/service' : './service.html' ?>">Find Out More</a>
    </div>
    <div class="mb-5">
        <?php require_once('./photo_row.php') ?>
    </div>
    <?php require_once('./service_row.php') ?>
</div>