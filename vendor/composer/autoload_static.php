<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2d274f3af5088be46e30603418fe657
{
    public static $files = array (
        'ab947d72f2741ca0ca8238e3756d87c8' => __DIR__ . '/../..' . '/core/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'W' => 
        array (
            'Workerman\\MySQL\\' => 16,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Workerman\\MySQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/mysql/src',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2d274f3af5088be46e30603418fe657::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2d274f3af5088be46e30603418fe657::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}