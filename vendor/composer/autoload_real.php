<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcd2ad5b746ee99f7d3fa8673d45b2bbc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitcd2ad5b746ee99f7d3fa8673d45b2bbc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcd2ad5b746ee99f7d3fa8673d45b2bbc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcd2ad5b746ee99f7d3fa8673d45b2bbc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
