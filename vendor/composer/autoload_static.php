<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac6caac397651d3863317572c97ee758
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac6caac397651d3863317572c97ee758::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac6caac397651d3863317572c97ee758::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac6caac397651d3863317572c97ee758::$classMap;

        }, null, ClassLoader::class);
    }
}
