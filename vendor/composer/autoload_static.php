<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311a5e7e41ef27eda687c53664c92957
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit311a5e7e41ef27eda687c53664c92957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit311a5e7e41ef27eda687c53664c92957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit311a5e7e41ef27eda687c53664c92957::$classMap;

        }, null, ClassLoader::class);
    }
}
