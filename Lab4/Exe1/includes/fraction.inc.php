<?php
class Fraction
{
    public $numa, $denb, $numc, $dend, $num3, $den3, $cal;

    public function __construct($num1, $den1, $num2, $den2, &$num3, &$den3, $calc)
    {
        $this->numa = $num1;
        $this->dend = $den1;
        $this->numc = $num2;
        $this->dend = $den2;
        $this->num3 = $num3;
        $this->den3 = $den3;
        $this->cal = $calc;
    }
    // PHP program to add
    // 2 fractions

    // Function to return
    // gcd of a and b
    public function gcd($a, $b)
    {
        if ($a == 0)
            return $b;
        return $this->gcd($b % $a, $a);
    }

    // Function to convert the
    // obtained fraction into
    // it's simplest form
    public function lowest(&$den3, &$num3)
    {
        // Finding gcd of both terms
        $common_factor = $this->gcd($num3, $den3);

        // Converting both terms
        // into simpler terms by
        // dividing them by common factor

        $den3 = (int)$den3 / $common_factor;
        $num3 = (int) $num3 / $common_factor;
    }

    // Function to add
    // two fractions
    // public function addFraction(
    //     $num1,
    //     $den1,
    //     $num2,
    //     $den2,
    //     &$num3,
    //     &$den3
    // ) {
    //     // Finding gcd of den1 and den2
    //     $den3 = $this->gcd($den1, $den2);

    //     // Denominator of final
    //     // fraction obtained finding
    //     // LCM of den1 and den2
    //     // LCM * GCD = a * b
    //     $den3 = ($den1 * $den2) / $den3;

    //     // Changing the fractions to
    //     // have same denominator Numerator
    //     // of the final fraction obtained
    //     $num3 = ($num1) * ($den3 / $den1) +
    //         ($num2) * ($den3 / $den2);

    //     // Calling function to convert
    //     // final fraction into it's
    //     // simplest form
    //     $this->lowest($den3, $num3);
    // }
    public function calc(
        $num1,
        $den1,
        $num2,
        $den2,
        &$num3,
        &$den3
    ) {
        switch ($this->cal) {
            case 'add':
                // Finding gcd of den1 and den2
                $den3 = $this->gcd($den1, $den2);

                // Denominator of final
                // fraction obtained finding
                // LCM of den1 and den2
                // LCM * GCD = a * b
                $den3 = ($den1 * $den2) / $den3;

                // Changing the fractions to
                // have same denominator Numerator
                // of the final fraction obtained
                $num3 = ($num1) * ($den3 / $den1) +
                    ($num2) * ($den3 / $den2);

                // Calling function to convert
                // final fraction into it's
                // simplest form
                // echo " ", $num1, "/", $den1, " + ", $num2, "/", $den2, " is equal to ", $num3, "/", $den3;
                $this->lowest($den3, $num3);
                $result = $num1 . "/" . $den1 . " + " . $num2 . "/" . $den2 . " = " . $num3 . "/" . $den3;
                break;
            case 'sub':
                // Finding gcd of den1 and den2
                $den3 = $this->gcd($den1, $den2);

                // Denominator of final
                // fraction obtained finding
                // LCM of den1 and den2
                // LCM * GCD = a * b
                $den3 = ($den1 * $den2) / $den3;

                // Changing the fractions to
                // have same denominator Numerator
                // of the final fraction obtained
                $num3 = ($num1) * ($den3 / $den1) -
                    ($num2) * ($den3 / $den2);

                // Calling function to convert
                // final fraction into it's
                // simplest form
                $this->lowest($den3, $num3);
                $result = $num1 . "/" . $den1 . " - " . $num2 . "/" . $den2 . " = " . $num3 . "/" . $den3;
                break;
            case 'mul':
                $num3 = ($num1) * ($num2);
                $den3 = ($den1) * ($den2);
                $this->lowest($den3, $num3);
                $result = $num1 . "/" . $den1 . " * " . $num2 . "/" . $den2 . " = " . $num3 . "/" . $den3;
                break;

            case 'div':
                $num3 = ($num1) * ($den2);
                $den3 = ($den1) * ($num2);
                $this->lowest($num3, $den3);
                $result = $num1 . "/" . $den1 . " // " . $num2 . "/" . $den2 . " = " . $num3 . "/" . $den3;
                break;
            default:
                $result = 'An error occur while processing your code';
                break;
        }
        return $result;
    }
}

// $num1 = 1;
// $den1 = 500;
// $num2 = 2;
// $den2 = 1500;
// $den3;
// $num3;
// $cal = new Fraction(
//     $num1,
//     $den1,
//     $num2,
//     $den2,
//     $num3,
//     $den3
// );
// $cal->addFraction(
//     $num1,
//     $den1,
//     $num2,
//     $den2,
//     $num3,
//     $den3
// );
// echo $num1, "/", $den1, " + ",
// $num2, "/", $den2, " is equal to ",
// $num3, "/", $den3, "\n";
			
// 1/500 + 2/1500 is equal to 1/300
