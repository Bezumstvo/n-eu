<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba630bde28f0205e56ba8fe0cede1c9c
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\imagine\\' => 12,
            'yii\\composer\\' => 13,
            'yii\\authclient\\' => 15,
            'yii\\' => 4,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'b' => 
        array (
            'budyaga\\users\\' => 14,
            'budyaga\\cropper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-imagine',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\authclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-authclient',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'budyaga\\users\\' => 
        array (
            0 => __DIR__ . '/..' . '/budyaga/yii2-users',
        ),
        'budyaga\\cropper\\' => 
        array (
            0 => __DIR__ . '/..' . '/budyaga/yii2-cropper',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba630bde28f0205e56ba8fe0cede1c9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba630bde28f0205e56ba8fe0cede1c9c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitba630bde28f0205e56ba8fe0cede1c9c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
