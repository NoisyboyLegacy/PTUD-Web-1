<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Employee - Detail</h3>
        <div class="row">
            <div class="col-lg-4">
                ID =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->ID ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Name =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->Name ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Surname =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->Surname ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Email =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->Email ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Phone =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->Phone ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                Mã Phòng Ban =
            </div>
            <div class="col-lg-8">
                <?php echo $data["emp"]->ID_Depart ?>
            </div>
        </div>
    </div>
</body>

</html>