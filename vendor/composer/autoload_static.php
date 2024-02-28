<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fa9445f1a6ae2da2f558b302c5c8350
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecf\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecf\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fa9445f1a6ae2da2f558b302c5c8350::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fa9445f1a6ae2da2f558b302c5c8350::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1fa9445f1a6ae2da2f558b302c5c8350::$classMap;

        }, null, ClassLoader::class);
    }
}
