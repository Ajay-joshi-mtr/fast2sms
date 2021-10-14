<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5131db5d8d211a9d58e15304676971ae
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ajayjoshi\\Fast2sms\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ajayjoshi\\Fast2sms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5131db5d8d211a9d58e15304676971ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5131db5d8d211a9d58e15304676971ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5131db5d8d211a9d58e15304676971ae::$classMap;

        }, null, ClassLoader::class);
    }
}
