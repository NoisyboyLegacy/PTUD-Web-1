<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center">PHÉP TÍNH AJAX</h3>
        <div class="d-flex justify-content-center">
            <form>
                <div class="mb-3">
                    <label class="form-label">Số thứ nhất</label>
                    <input type="number" class="form-control" name="num1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số thứ hai</label>
                    <input type="number" class="form-control" name="num2">
                </div>
                <span id="result"></span>

                <button type="button" onclick="calc('add')" class="btn btn-primary">Add</button>
                <button type="button" onclick="calc('sub')" class="btn btn-secondary">Sub</button>
                <button type="button" onclick="calc('mul')" class="btn btn-success">Mul</button>
                <button type="button" onclick="calc('div')" class="btn btn-danger">Div</button>
            </form>
        </div>
    </div>

    <script>
        function calc(reqType) {
            var xhr = new XMLHttpRequest();
            var no1 = document.getElementById("no1").value;
            var no2 = document.getElementById("no2").value;
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            }

            xhr.open("GET", "print.php?req=" + reqType + "&n1=" + no1 + "&n2" + no2, true);
            xhr.send();
        }
    </script>
</body>

</html>