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
 * Enumのテンプレート
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

    /**
     * @var string[] 定数がもつ情報
     */
    private $list;

    public function __construct(int $value)
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

    /**
     * Enumのリストを取得する
     *
     * @return Enum[]
     */
    abstract public static function getValueList() : array;
}