<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 17.11.15
 * Time: 2:04
 */

namespace Exception;


class FileExistException extends \Exception
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;

        parent::__construct("File [" .$this->getFilename() . "] already exists! \n");
    }

    public function __toString()
    {
        return $this->getMessage(); // TODO: Change the autogenerated stub
    }

    public function getFilename()
    {
        return $this->filename;
    }
}