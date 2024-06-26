<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd2ad5b746ee99f7d3fa8673d45b2bbc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd2ad5b746ee99f7d3fa8673d45b2bbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd2ad5b746ee99f7d3fa8673d45b2bbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd2ad5b746ee99f7d3fa8673d45b2bbc::$classMap;

        }, null, ClassLoader::class);
    }
}
