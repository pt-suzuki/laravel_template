<?php
namespace App\Validaters\Personal;

use app\Validaters\IValidater;
use Illuminate\Http\Request;

/**
 *
 * @since 2018/5/11
 * @author takuya
 */
abstract class AbstractRequestValidater implements IValidater
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var string
     */
    private $kind;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function validation(): bool{
        $this->request->validate([$kind => 'require']);

        return !$this->request->fails();
    }

    abstract protected function getKey();
}

