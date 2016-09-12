<?php
    class Queenattack
    {
        private $positionX;
        private $positionY;

        function __construct($positionX, $positionY)
        {
            $this->positionX = $positionX;
            $this->positionY = $positionY;
        }

        function getPosition()
        {
            return array($this->positionX, $this->positionY);
        }

        function canAttack($targetX, $targetY)
        {
            if($targetX == $this->getPosition()[0]) {
                return "Can attack";
            } elseif ($targetY == $this->getPosition()[1]) {
                return "Can attack";
            } elseif (abs($this->getPosition()[0] - $targetX ) == abs($this->getPosition()[1] - $targetY)) {
                return "Can attack";
            } else {
                return "Cannot attack";
            }

        }
    }
?>
