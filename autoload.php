<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */
class Autoloader
{

    static $rules = [];
    const DIRECTORY_SEPARATOR  = '/';

    public static function register($autoLoaderRules = [])
    {
        if(!empty($autoLoaderRules))
            self::$rules = $autoLoaderRules;

        spl_autoload_register(function ($class) {

            if(!empty(self::$rules))
            {
                foreach (self::$rules as $pattern => $redirect)
                {
                    $len = strlen($pattern);
                    if(substr($class, 0, $len) == $pattern)
                        $class = $redirect.substr($class, $len);
                }
            }

            $file = str_replace('\\', self::DIRECTORY_SEPARATOR, dirname(__FILE__).self::DIRECTORY_SEPARATOR.$class.'.php');

            //exit('autoLoad from: '.$file);

            if (file_exists($file)) {
                require $file;
                return true;
            }
            else
            {
                //throw new Exception("Cant load $class from PATH=".$file);
                return false;
            }
        });
    }
}