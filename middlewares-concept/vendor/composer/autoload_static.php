<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb888d803d22bf281ed4505ffe0408da6
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '662a729f963d39afe703c9d9b7ab4a8c' => __DIR__ . '/..' . '/symfony/polyfill-php83/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2203a247e6fda86070a5e4e07aed533a' => __DIR__ . '/..' . '/symfony/clock/Resources/now.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php83\\' => 23,
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Messenger\\' => 28,
            'Symfony\\Component\\Clock\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Clock\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php83\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php83',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Messenger\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/messenger',
        ),
        'Symfony\\Component\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/clock',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/clock/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DateError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateError.php',
        'DateException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateException.php',
        'DateInvalidOperationException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidOperationException.php',
        'DateInvalidTimeZoneException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidTimeZoneException.php',
        'DateMalformedIntervalStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedIntervalStringException.php',
        'DateMalformedPeriodStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedPeriodStringException.php',
        'DateMalformedStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedStringException.php',
        'DateObjectError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateObjectError.php',
        'DateRangeError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateRangeError.php',
        'Override' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/Override.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb888d803d22bf281ed4505ffe0408da6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb888d803d22bf281ed4505ffe0408da6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb888d803d22bf281ed4505ffe0408da6::$classMap;

        }, null, ClassLoader::class);
    }
}
