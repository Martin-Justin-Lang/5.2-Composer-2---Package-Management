<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97e51316360d347d0bd9b4c131924b23
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97e51316360d347d0bd9b4c131924b23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97e51316360d347d0bd9b4c131924b23::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit97e51316360d347d0bd9b4c131924b23::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit97e51316360d347d0bd9b4c131924b23::$classMap;

        }, null, ClassLoader::class);
    }
}
