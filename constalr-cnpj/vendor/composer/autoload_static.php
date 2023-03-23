<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddf8aa9b8adc8d1628784a24adbb2014
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitddf8aa9b8adc8d1628784a24adbb2014::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddf8aa9b8adc8d1628784a24adbb2014::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddf8aa9b8adc8d1628784a24adbb2014::$classMap;

        }, null, ClassLoader::class);
    }
}