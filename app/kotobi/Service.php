<?php
/**
 * Created by PhpStorm.
 * User: shadow
 * Date: 12/8/2019
 * Time: 6:42 AM
 */

namespace App\kotobi;


class Service
{
    private $errors;

    public function setErrors($error)
    {
        if(is_array($error))
            $this->errors = $error;

        $this->errors[] = $error;

    }

    public function getErrors()
    {
        return $this->errors;
    }
}