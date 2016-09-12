<?php

    require_once "src/Pingpong.php";

    class pingpongtests extends PHPUnit_Framework_TestCase
    {

    function test_number_15()
    {
        $test_pingpong = new Pingpong;
        $input =  45;

        $result = $test_pingpong->pingpongcheck($input);

        $this->assertEquals("ping-pong", $result);
    }

    function test_number_5()
    {
        $test_pingpong = new Pingpong;
        $input =  50;

        $result = $test_pingpong->pingpongcheck($input);

        $this->assertEquals("pong", $result);
    }

    function test_number_3()
    {
        $test_pingpong = new Pingpong;
        $input =  12;

        $result = $test_pingpong->pingpongcheck($input);

        $this->assertEquals("ping", $result);
    }

    function test_number_others()
    {
        $test_pingpong = new Pingpong;
        $input =  22;

        $result = $test_pingpong->pingpongcheck($input);

        $this->assertEquals(22, $result);
    }

    function test_pingpong_run()
    {
        $test_pingpong = new Pingpong;
        $input =  15;

        $result = $test_pingpong->pingponggenerator($input);

        $this->assertEquals("1 2 ping 4 pong ping 7 8 ping pong 11 ping 13 14 ping-pong", $result);
    }

    }

?>
