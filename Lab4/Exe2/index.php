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
    <div class="container">
        <div class="d-flex justify-content-center">
                <form style="width: 40%;" action="editForm.php" method="POST">
                    <h4>Athlete Infomation</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Age" name="age">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sport" name="sport">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Weight" name="w">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Height" name="h">
                    </div>
                    <button style="width: 100%" type="submit" class="btn btn-primary" name="submit1">Add</button>
                    <button style="width: 100%" type="submit" class="mt-3 btn btn-primary" name="submit2">Confirm</button>
                </form>
        </div>
    </div>
</body>

</html>