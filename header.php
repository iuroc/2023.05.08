<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Introduce Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- Website title -->
    <title><?php Config::load(ucwords($page_name)) ?> - <?php Config::load(Config::$site_name) ?></title>
</head>

<body>
    <!-- This is the navigation bar of the website -->
    <nav class="navbar navbar-expand-sm bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="./index.html"><?php Config::load(Config::$site_name) ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page_name == 'home') echo 'active' ?>" href="./index.html">Home</a>
                    </li>
                    <?php foreach (Config::$nav_links as $nav_link) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nav_link == $page_name) echo 'active' ?>" href="./<?php Config::load($nav_link) ?>.html"><?php Config::load(ucwords($nav_link)) ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <!-- Search box -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>