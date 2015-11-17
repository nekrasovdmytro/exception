<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 17.11.15
 * Time: 1:56
 */
include 'Model/Exception/FileExistException.php';
include 'Model/Exception/NullException.php';
include 'Model/FileModul/FileCreator.php';

use FileModul\FileCreator;

try {
    $fileCreator = new FileCreator();

    $fileCreator->setFilename('index.html')->
    setContent("<h1>Text text</h1>")->
    createFile();

} catch (Exception $e) {
    echo $e->getMessage();
}
