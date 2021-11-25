<?php
include 'includes/fraction.inc.php';
$numa = $_POST['a'];
$denb = $_POST['b'];
$numc = $_POST['c'];
$dend = $_POST['d'];
$den3;
$num3;
$cal = $_POST['op'];

$calc = new Fraction($numa, $denb, $numc, $dend, $den3, $num3, $cal);
$bling = $calc->calc($numa, $denb, $numc, $dend, $num3, $den3);
// echo " ", $numa, "/", $denb, " + ", $numc, "/", $dend, " is equal to ", $num3, "/", $den3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phan So</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form style="width: 40%; border: 1px solid" action="index.php" method="POST">
                <h4>Fraction 1:</h4>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $numa . "/" . $denb ?>">
                </div>
                <h4>Fraction 2:</h4>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $numc . "/" . $dend ?>">
                </div>
                <h4>Result:</h4>
                <div class="form-group">
                    <h5><?php echo $bling ?></h5>
                </div>
                <button onclick="returnPage();" style="width: 100%" type="submit" class="btn btn-primary" name="submit">Return</button>
            </form>
        </div>
    </div>
    <script>
        function returnPrage() {
            window.location = 'index.php';
        }
    </script>
</body>

</html>