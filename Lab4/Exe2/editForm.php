<?php
include 'includes/athletes.inc.php';

$aname = $_POST['name'];
$aage = $_POST['age'];
$asport = $_POST['sport'];
$aweight = $_POST['w'];
$aheight = $_POST['h'];

if (isset($_POST['submit1'])) {
    $file = fopen("test.txt", "a");
    fwrite($file, "\n" . $aname . ",");
    fwrite($file, $aage . ",");
    fwrite($file, $asport . ",");
    fwrite($file, $aweight . ",");
    fwrite($file, $aheight);
    // fwrite($file, "\n");
    fclose($file);
    echo "<span class='badge badge-pill badge-primary'>Athlete Added</span>";
    header('location: index.php');
} elseif (isset($_POST['submit2'])) {
    $filename = "test.txt";
    $handle = fopen($filename, "r");
    $arr = [];
    while (!feof($handle)) {
        $content = fgets($handle);
        $converted = explode(",", $content);
        list($aname, $aage, $asport, $aweight, $aheight) = $converted;

        $new = new Athlete($aname, $aage, $asport, $aweight, $aheight);
        $ar = $new->ArrayConvert();
        $score = $new->Compare($aheight, $aweight);
        array_push($ar, $score);
        array_push($arr, $ar);
    }
    // echo "<pre>";
    // var_dump($arr);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // for ($row = 0; $row < count($arr); $row++) {
    //     array_push($arr[$row], "bling");
    //     for ($col = 0; $col < count($arr[$row]); $col++) {
    //         // echo($arr[$row][$col]);
    //     }
    // }
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athlete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <?php
    if (count($arr) > 0) : ?>
        <table class="table">
            <thead>
                <tr>
                    <!-- <th><?php echo implode('</th><th>', array_keys(current($arr))); ?></th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Sport</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Height</th>
                    <th scope="col">Score</th>
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