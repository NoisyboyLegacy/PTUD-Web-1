<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    include 'strawberry.php';
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
    ?>
</body>

</html>