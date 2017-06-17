<?php
/** utf-8 */

namespace helpers;

/** create class cosole */
class Console
{
    public static $success = 'SUCCESS';
    public static $failture = 'FAILTURE';
    public static $warning = 'WARNING';
    public static $note = 'NOTE';

    public static function printLine($message, $status)
    {
        switch ($status) {
            case self::$success:
                $color = "[0;32m";
                break;
            case self::$failture:
                $color = "[0;31m";
                break;
            case self::$warning:
                $color = "[1;33m";
                break;
            case self::$note:
                $color = "[0;34m";
                break;
            default:
                $color = '[1;37m';
        }

        echo " {$color}{$message} " . "<br>" . PHP_EOL;
    }
}