<?php

namespace App\Validation;


class CustomRules
{
    protected $error;

    function ssoStudent(string $str, string $fields, array $data)
    {
        if (preg_match('/^[a-zA-Z0-9.!#$%&’+\/=?^_`{|}~-]+.uns.ac.id$/', $data['email'])) {
            return true;
        } else {
            return false;
        }
    }
}
