<?php

    require_once "src/Queenattack.php";

    class queenAttackTests extends PHPUnit_Framework_TestCase
    {
        function test_attack_vertical()
        {
            $test_canAttack = new Queenattack(3,3);
            $input = array(3,1);
            $output = $test_canAttack->canAttack($input[0], $input[1]);
            $this->assertEquals("Can attack", $output);
        }

        function test_attack_horizontal()
        {
            $test_canAttack = new Queenattack(3,3);
            $input = array(2,3);
            $output = $test_canAttack->canAttack($input[0], $input[1]);
            $this->assertEquals("Can attack", $output);
        }

        function test_attack_diagonal()
        {
            $test_canAttack = new Queenattack(1,3);
            $input = array(2,2);
            $output = $test_canAttack->canAttack($input[0], $input[1]);
            $this->assertEquals("Can attack", $output);
        }

        function test_attack_cannot()
        {
            $test_canAttack = new Queenattack(3,3);
            $input = array(4,1);
            $output = $test_canAttack->canAttack($input[0], $input[1]);
            $this->assertEquals("Cannot attack", $output);
        }
    }

?>
