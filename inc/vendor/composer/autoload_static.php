<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8777496413f09e80064982dc9d803e4b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8777496413f09e80064982dc9d803e4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8777496413f09e80064982dc9d803e4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8777496413f09e80064982dc9d803e4b::$classMap;

        }, null, ClassLoader::class);
    }
}
