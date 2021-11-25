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
            <form style="width: 40%;" action="fraction.php" method="POST">
                <h4>Fraction 1</h4>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter numerator a" name="a">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter denominator b" name="b">
                </div>
                <h4>Fraction 2</h4>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter numerator c" name="c">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter denominator d" name="d">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="op">
                        <option value="add">Add</option>
                        <option value="sub">Sub</option>
                        <option value="mul">Mul</option>
                        <option value="div">Divi</option>
                    </select>
                </div>
                <button style="width: 100%" type="submit" class="btn btn-primary" name="submit">Calculate</button>
            </form>
        </div>
    </div>
</body>

</html>