<?php
namespace App\Validaters;

use App\Enums\ErrorCode;

/**
 *
 * @author takuya
 */
interface IValidater
{
    public function validation(): bool;

    public function getError(): ErrorCode;
}

