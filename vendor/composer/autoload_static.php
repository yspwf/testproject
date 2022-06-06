<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f12f90450771f785372915d04ccc86a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Code\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f12f90450771f785372915d04ccc86a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f12f90450771f785372915d04ccc86a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f12f90450771f785372915d04ccc86a::$classMap;

        }, null, ClassLoader::class);
    }
}
