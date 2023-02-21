<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/5.2.3/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <title><?php Config::load(ucwords($page_name)) ?> - <?php Config::load(Config::$site_name) ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="./"><?php Config::load(Config::$site_name) ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page_name == 'home') echo 'active' ?>" href="./">Home</a>
                    </li>
                    <?php foreach (Config::$nav_links as $nav_link) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nav_link == $page_name) echo 'active' ?>" href="./<?php Config::load($nav_link) ?>.php"><?php Config::load(ucwords($nav_link)) ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>