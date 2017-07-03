<?php

    require_once "src/PingPong.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_numbers_not_divisible_by_three()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 8;

            $result = $test_PingPongGenerator->numbers_not_divisible_by_three($input_number);

            $this->assertEquals(false, $result);
        }
    }
?>
