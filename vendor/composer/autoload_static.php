<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f574846389427a37d69c717629a8966
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
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f574846389427a37d69c717629a8966::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f574846389427a37d69c717629a8966::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f574846389427a37d69c717629a8966::$classMap;

        }, null, ClassLoader::class);
    }
}
