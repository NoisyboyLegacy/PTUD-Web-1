<?php
class Athlete
{
    public $name, $age, $sport, $weight, $height, $score;
    public function __construct($aName, $aAge, $aSport, $aWeight, $aHeight)
    {
        $this->name = $aName;
        $this->age = $aAge;
        $this->sport = $aSport;
        $this->weight = $aWeight;
        $this->height = $aHeight;
    }

    public function Output($name, $age, $sport, $weight, $height)
    {
        return "Name: " . $name . ", Age: " . $age . ", Sport: " . $sport . ", Weight: " . $weight . ", Height: " . $height;
    }
    public function ArrayConvert()
    {
        return [
            $this->name,
            $this->age,
            $this->sport,
            $this->weight,
            $this->height
        ];
    }
    public function Compare($height, $weight)
    {
        return $this->score = $height - $weight;
    }
}
