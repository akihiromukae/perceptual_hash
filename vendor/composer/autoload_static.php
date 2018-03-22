<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f1c391b35cc4284220c456b5950e2d3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jenssegers\\ImageHash\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jenssegers\\ImageHash\\' => 
        array (
            0 => __DIR__ . '/..' . '/jenssegers/imagehash/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f1c391b35cc4284220c456b5950e2d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f1c391b35cc4284220c456b5950e2d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
