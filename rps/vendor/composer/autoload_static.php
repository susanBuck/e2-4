<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit810f6314ab972a092f5de18a8ee0628f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit810f6314ab972a092f5de18a8ee0628f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit810f6314ab972a092f5de18a8ee0628f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit810f6314ab972a092f5de18a8ee0628f::$classMap;

        }, null, ClassLoader::class);
    }
}