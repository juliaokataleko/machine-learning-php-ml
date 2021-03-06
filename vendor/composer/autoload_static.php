<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb27220c1d2a27651542bfe7db48af67c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb27220c1d2a27651542bfe7db48af67c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb27220c1d2a27651542bfe7db48af67c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
