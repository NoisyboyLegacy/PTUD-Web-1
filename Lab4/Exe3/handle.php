<?php
include 'includes/combination.inc.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$date = $_POST['date'];
$city = $_POST['cp'];
$quantity = $_POST['quantity'];

if (isset($_POST['submit1'])) {
    $file = fopen("plane.txt", "a");
    fwrite($file, "\n" . $name . ",");
    fwrite($file, $gender . ",");
    fwrite($file, $age . ",");
    fwrite($file, $date . ",");
    fwrite($file, $city . ",");
    fwrite($file, $quantity);
    fclose($file);
    header('location: index.php');
} elseif (isset($_POST['submit2'])) {
    $filename = "plane.txt";
    $handle = fopen($filename, "r");
    $arr = [];
    while (!feof($handle)) {
        $content = fgets($handle);
        $converted = explode(",", $content);
        list($name, $gender, $age, $date, $city, $quantity) = $converted;

        //This part is for Customer
        $cus = new Customer($name, $gender, $age);
        $customerWrapUp = $cus->CustomerWrapUp();

        //This part is for Ticket
        $ticket = new Ticket($city, $date, $quantity);
        $priceEach = $ticket->getPriceEach();
        // echo $priceEach . " ";
        $total = $ticket->getPriceTotal($priceEach, $quantity);
        // echo $total . " ";
        $ticketWrapUp = $ticket->WrapUP($priceEach, $total);
        $ar = array_merge($customerWrapUp, $ticketWrapUp);
        array_push($arr, $ar);
        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";
    }

    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <?php
    if (count($arr) > 0) : ?>
        <table class="table">
            <thead>
                <tr>
                    <!-- <th><?php echo implode('</th><th>', array_keys(current($arr))); ?></th> -->
                    <th scope="col">Customer</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Ticket Price Each</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr as $row) : array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>




</body>

</html>