<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf92fe91f717bef89227019cd9eb4ddb2
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'crud\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'crud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf92fe91f717bef89227019cd9eb4ddb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf92fe91f717bef89227019cd9eb4ddb2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}