<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c7b3991bd65ee278119d201f80a7844
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Philo\\Blade\\' => 12,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Philo\\Blade\\' => 
        array (
            0 => __DIR__ . '/..' . '/philo/laravel-blade/src',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'h' => 
        array (
            'h2o' => 
            array (
                0 => __DIR__ . '/..' . '/paudebau/h2o-php',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
            'Symfony\\Component\\Console\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/console',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\View' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/view',
            ),
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Filesystem' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/filesystem',
            ),
            'Illuminate\\Events' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/events',
            ),
            'Illuminate\\Database' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/database',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
        ),
    );

    public static $classMap = array (
        'ControllerMake' => __DIR__ . '/../..' . '/app/commands/controller.php',
        'ModelMake' => __DIR__ . '/../..' . '/app/commands/model.php',
        'User' => __DIR__ . '/../..' . '/app/models/user.php',
        'ViewMake' => __DIR__ . '/../..' . '/app/commands/view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c7b3991bd65ee278119d201f80a7844::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c7b3991bd65ee278119d201f80a7844::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3c7b3991bd65ee278119d201f80a7844::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3c7b3991bd65ee278119d201f80a7844::$classMap;

        }, null, ClassLoader::class);
    }
}
