<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 17.11.15
 * Time: 2:29
 */

namespace Exception;


class NullException extends \Exception
{
    public function __construct($variable)
    {
        parent::__construct("Variable [" .$variable . "] is null! \n");
    }

    public function __toString()
    {
        return parent::__toString();
    }
}