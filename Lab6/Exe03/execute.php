<?php 
// check the file name
    $A = $_REQUEST['num_a'];
    $B = $_REQUEST['num_b'];
    $arg=$_REQUEST['arg'];
    $kq = 0;
    switch($arg)
    {
        case "plus":
            $kq = $A+$B;
            break;
        case "-":
            $kq = $A-$B;
            break;
        case "*":
            $kq = $A*$B;
            break;
        case "/":
            $kq = $A/$B;
            break;
    }

    echo "$A + $B = $kq";
?>