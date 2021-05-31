<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a3a7941d3be58e83265a60c56e6f099
{
    public static $files = array (
        '01f631248269c0e97a1412726e0929f0' => __DIR__ . '/../..' . '/Config/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a3a7941d3be58e83265a60c56e6f099::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a3a7941d3be58e83265a60c56e6f099::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
