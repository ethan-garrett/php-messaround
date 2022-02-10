<?php

class Duck
{
    protected $wingspan = 20;

    public function getWingspan (): int
    {
        return $this->wingspan;
    }

    public function setWingspan(int $wingspan): void
    {
        if ($wingspan >= 0 && $wingspan < 50){
            $this->wingspan = $wingspan;
        }
    }
}

$motherDucker = new Duck();
$motherDucker->setWingspan(35);
echo 'the duck has a wingspan of ' . $motherDucker->getWingspan();