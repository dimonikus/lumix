<?php

/**
 * Created by PhpStorm.
 * User: shark
 * Date: 01.02.2018
 * Time: 0:31
 */
namespace app\modules\admin\behaviors;

class SluggableBehavior extends \yii\behaviors\SluggableBehavior
{
    public static $transliterationTable = array(
        'ый'=>'iy',
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e',
        'ё'=>'e', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'y', 'к'=>'k',
        'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r',
        'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'ts',
        'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'', 'ы'=>'y', 'ь'=>'',
        'э'=>'e', 'ю'=>'yu', 'я'=>'ya',
    );

    protected function generateSlug($slugParts)
    {
        $transString = static::toAscii(implode('-', $slugParts));

        return parent::generateSlug([$transString]);
    }

    protected static function toAscii($string)
    {
        $string = mb_strtolower($string);
        $arrayFrom = array_keys(self::$transliterationTable);
        $arrayTo = array_values(self::$transliterationTable);

        return str_replace($arrayFrom, $arrayTo, $string);
    }
}