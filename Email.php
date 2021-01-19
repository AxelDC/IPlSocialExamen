<?php


class Email
{

    public function checkEmail(string $str):bool{
        $reg="/^([a-zA-Z0-9-.]+)@([a-zA-Z0-9-.]+).([a-zA-Z]{2,5})$/";
        if(preg_match($reg,$str)) return true;

        return false;


    }
}