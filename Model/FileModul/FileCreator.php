<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 17.11.15
 * Time: 1:58
 */

namespace FileModul;

use Exception\FileExistException;
use Exception\NullException;

class FileCreator
{
    protected $filename;
    protected $content;

    public function __construct($filename = null, $content = null)
    {
        $this->setFilename($filename)->setContent($content);
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function createFile()
    {
        // variable is null
        try {

            if ($this->filename === null) {
                throw new NullException('filename');
            }

            if ($this->content === null) {
                throw new NullException('content');
            }

        } catch (NullException $e) {
            throw $e;
        }

        //file already exists
        try {

            if (file_exists($this->filename)) {
                throw new FileExistException($this->filename);
            }

            file_put_contents($this->filename, $this->content);

        } catch (FileExistException $e) {
            throw $e;
        }
    }
}