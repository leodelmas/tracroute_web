<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3349d6e0ead5518345f61c5448b0d35
{
    public static $classMap = array (
        'dashtrends' => __DIR__ . '/../..' . '/dashtrends.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc3349d6e0ead5518345f61c5448b0d35::$classMap;

        }, null, ClassLoader::class);
    }
}
