<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04a686e01cb7575681bba3bb628cd87a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04a686e01cb7575681bba3bb628cd87a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04a686e01cb7575681bba3bb628cd87a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04a686e01cb7575681bba3bb628cd87a::$classMap;

        }, null, ClassLoader::class);
    }
}
