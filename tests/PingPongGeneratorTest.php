<?php

    require_once "src/PingPong.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_numbers_divisible_by_three_false()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 8;

            $result = $test_PingPongGenerator->numbers_divisible_by_three($input_number);

            $this->assertEquals(false, $result);
        }
        function test_numbers_divisible_by_three_true()
        {
        $test_PingPongGenerator = new PingPongGenerator;
        $input_number = 9;

        $result = $test_PingPongGenerator->numbers_divisible_by_three($input_number);

        $this->assertEquals(true, $result);
        }
    }
?>
