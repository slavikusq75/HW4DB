<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 03.11.15
 * Time: 0:28
 */
namespace Entities;

interface WorkWithDBInterface
{
    public function insertData();
    public function updateData();
    public function removeData();
}
