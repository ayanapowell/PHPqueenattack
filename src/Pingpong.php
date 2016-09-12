<?php
    class Pingpong
    {
        function pingpongcheck($checknumber)
        {
            if ($checknumber % 15 == 0) {
                return "ping-pong";
            } elseif ($checknumber % 5 == 0 ) {
                return "pong";
            } elseif ($checknumber % 3 == 0) {
                return "ping";
            } else {
                return $checknumber;
            }
        }

        function pingponggenerator($targetnumber)
        {
            $return_array = array();
            for ($i = 1; $i < $targetnumber + 1; $i++) {
                array_push($return_array, $this->pingpongcheck($i));
            }
            return implode(" ", $return_array);
        }
    }
?>
