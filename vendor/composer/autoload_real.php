<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit55c187d5b7ae03d4f5053e47b773ae7a
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

        spl_autoload_register(array('ComposerAutoloaderInit55c187d5b7ae03d4f5053e47b773ae7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit55c187d5b7ae03d4f5053e47b773ae7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit55c187d5b7ae03d4f5053e47b773ae7a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
