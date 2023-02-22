<?php

/** 网站配置 */
class Config
{
    /** 网站名称 */
    public static string $site_name = 'Future Studio';
    /** 载入值 */
    public static function load(mixed $value)
    {
        echo $value;
    }
    public static array $nav_links = ['service', 'photo', 'about'];
}
