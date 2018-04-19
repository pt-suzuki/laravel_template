<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2018/04/16
 * Time: 18:27
 */

namespace App\Enums;

use ReflectionObject;
use InvalidArgumentException;

/**
 * 列挙型の雛形クラス
 *
 * 
 * Class Enum
 * @package App\Enums
 */
abstract class Enum
{
    /**
     * @var int
     */
    private $scalar;

    public function __construct(integer $value)
    {
        $ref = new ReflectionObject($this);
        $const_arr = $ref->getConstants();
        if (! in_array($value, $const_arr, true)) {
            throw new InvalidArgumentException;
        }

        $this->scalar = $value;
    }

    final public static function __callStatic($label, $args)
    {
        $class = get_called_class();
        $const = constant("$class::$label");
        return new $class($const);
    }

    /**
     * @return integer
     */
    final public function valueOf()
    {
        return $this->scalar;
    }

    /**
     * @return string
     */
    final public function __toString() :string 
    {
        return (string)$this->scalar;
    }
    
    public static function getEnumList(){
        
    }
}