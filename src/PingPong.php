<?php

class PingPongGenerator
{
    private $user_input;


    function generatePingPongArray($user_input)
    {
        $this->number = $number;

    }
    function getNumber()
    {
        return $this->number;
    }
    function setNumber()
    {
        $this->number = (string)$new_number;
        //maybe try get new array eventually
    }
    static function getAll()
    {
        return $_SESSION['list_of_numbers'];
    }
    static function deleteAll()
    {
        $_SESSION['list_of_numbers'] = array();
    }


}




 ?>
