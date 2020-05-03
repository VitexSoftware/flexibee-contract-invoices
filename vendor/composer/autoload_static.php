<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1ea4127c53c24add316e5baa815334d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FlexiPeeHP\\' => 11,
        ),
        'E' => 
        array (
            'Ease\\Logger\\' => 12,
            'Ease\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FlexiPeeHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/spoje.net/flexibee/src/FlexiPeeHP',
        ),
        'Ease\\Logger\\' => 
        array (
            0 => __DIR__ . '/..' . '/vitexsoftware/ease-core/src/Ease/Logger',
        ),
        'Ease\\' => 
        array (
            0 => __DIR__ . '/..' . '/vitexsoftware/ease-core/src/Ease',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail',
                1 => __DIR__ . '/..' . '/pear/mail_mime',
            ),
        ),
        'C' => 
        array (
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1ea4127c53c24add316e5baa815334d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1ea4127c53c24add316e5baa815334d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb1ea4127c53c24add316e5baa815334d::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitb1ea4127c53c24add316e5baa815334d::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitb1ea4127c53c24add316e5baa815334d::$classMap;

        }, null, ClassLoader::class);
    }
}