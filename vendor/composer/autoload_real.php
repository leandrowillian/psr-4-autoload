<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit04a686e01cb7575681bba3bb628cd87a
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

        spl_autoload_register(array('ComposerAutoloaderInit04a686e01cb7575681bba3bb628cd87a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit04a686e01cb7575681bba3bb628cd87a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit04a686e01cb7575681bba3bb628cd87a::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
