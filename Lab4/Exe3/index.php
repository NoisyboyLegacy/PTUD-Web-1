<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="handle.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Your full name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gender</label>
                        <select id="inputState" class="form-control" name="gender">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Fill this field" name="age">
                </div>
                <div class="form-group">
                    <label>Departure Day</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputState">City</label>
                        <select id="inputState" class="form-control" name="cp">
                            <option selected>Choose...</option>
                            <option value="HaNoi">Ha Noi: 100$</option>
                            <option value="SaiGon">Sai Gon: 50$</option>
                            <option value="NhaTrang">Nha Trang: 20$</option>
                            <option value="DaLat">Da Lat: 200$</option>
                            <option value="ThanhHoa">ThanhHoa: 99$</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Quantity</label>
                        <input type="number" class="form-control" id="inputZip" name="quantity">
                    </div>
                </div>
                <button style="width: 100%" type="submit" name="submit1" class="btn btn-primary">Add Data</button>
                <button style="width: 100%" type="submit" name="submit2" class="mt-3 btn btn-primary">Confirm</button>
            </form>
        </div>
    </div>

</body>

</html>