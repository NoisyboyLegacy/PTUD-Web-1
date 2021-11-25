<?php
class Ticket
{
    public $tickName, $date, $ticketPrice, $quantity;
    public function __construct($tickName, $date, $quantity)
    {
        $this->tickName = $tickName;
        $this->date = $date;
        $this->quantity = $quantity;
    }

    public function WrapUP($priceEach, $total)
    {
        return [
            $this->tickName,
            $this->date,
            $priceEach,
            $this->quantity,
            $total
        ];
    }

    public function Output($tickName, $date)
    {
        return "Ticket Name: " . $tickName . "<br> Date: " . $date;
    }
    public function getPriceEach()
    {
        switch ($this->tickName) {
            case 'HaNoi':
                return $this->ticketPrice = 100;
                break;
            case 'SaiGon':
                return $this->ticketPrice = 50;
                break;
            case 'NhaTrang':
                return $this->ticketPrice = 20;
                break;
            case 'DaLat':
                return $this->ticketPrice = 200;
                break;
            case 'ThanhHoa':
                return $this->ticketPrice = 99;
                break;
            default:
                echo "Use this web as a human please";
                break;
        }
    }
    public function getPriceTotal($pE, $quantity)
    {
        return $pE * $quantity;
    }
}

class Person
{
    public $fullName, $gender, $age;
    public function __construct($fullName, $gender, $age)
    {
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->age = $age;
    }
    public function OutputPerson()
    {
        return "Ticket Name" . $this->tickName . "<br>" . $this->date . "<br>" . $this->priceEach;
    }
}

class Customer extends Person
{
    public function CustomerWrapUp() {
        return [
            $this->fullName,
            $this->gender,
            $this->age
        ];
    }
}
