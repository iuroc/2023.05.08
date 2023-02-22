<?php

require('./config.php');
if (!file_exists('public')) {
    mkdir('public');
}
array_push(Config::$nav_links, 'index');
foreach (Config::$nav_links as $nav_link) {
    $file_name = $nav_link . '.html';
    $url = 'http://localhost/' . $file_name;
    file_put_contents('public/' . $file_name, file_get_contents($url));
    copy_folder('css', 'public/css');
    copy_folder('js', 'public/js');
    copy_folder('img', 'public/img');
}



function copy_folder($source, $destination)
{
    // 如果目标文件夹不存在，则创建
    if (!file_exists($destination)) {
        mkdir($destination);
    }

    // 遍历源文件夹中的所有文件和子文件夹
    $dir = opendir($source);
    while (($file = readdir($dir)) !== false) {
        if ($file == '.' || $file == '..') {
            continue;
        }

        $src = $source . '/' . $file;
        $dst = $destination . '/' . $file;

        if (is_dir($src)) {
            // 如果是子文件夹，则递归调用自身
            copy_folder($src, $dst);
        } else {
            // 如果是文件，则复制到目标文件夹
            copy($src, $dst);
        }
    }
    closedir($dir);
}
