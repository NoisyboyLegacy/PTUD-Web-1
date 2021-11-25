<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- check this -->
    <title>Ajax Calulator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="justify-content-center">
            <!-- check this -->
            <h1 class="text-center">Ajax Calculator</h1>
            <!-- check this hộ vệ turn table-primary to table-danger, thich bao dam turn table-primary to table-success -->
            <table class="table table-primary table-striped">

                <tr>
                    <!-- check this -->
                    <th scope="row">Number a : </th>
                    <td><input type="number" name="num_a" id="num_a"></td>
                </tr>
                <tr>
                    <!-- check this -->
                    <th scope="row">Number b : </th>
                    <td><input type="number" name="num_b" id="num_b"></td>
                </tr>
                <tr>
                    <!-- check all of those below -->
                    <th scope="row">Arg :</th>
                    <td>
                        <div id="arg">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arg" value="plus" checked="checked">
                                <label class="form-check-label" for="arg">Plus</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arg" value="sub">
                                <label class="form-check-label" for="arg">Sub</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arg" value="mul">
                                <label class="form-check-label" for="arg">Mul</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arg" value="div">
                                <label class="form-check-label" for="arg">Div</label>
                            </div>
                        </div>
                    </td>
                    <!-- end check -->
                </tr>
                <tr>
                    <td>
                        <!-- check this hộ vệ turn btn btn-light to btn btn-primary, thich bao dam turn btn btn-success to btn btn-success -->
                        <button class="btn btn-light" name="result" onclick="tinhketqua()">Result</button>
                    </td>
                    <td id="kq"></td>
                </tr>
            </table>
            <script>
                function tinhketqua() {
                    var numA = document.getElementById("num_a").value;
                    var numB = document.getElementById("num_b").value;
                    var arg = document.querySelector('input[name="arg"]:checked').value;
                    if (numA.length === 0 || numB.length === 0) {
                        alert('Please this row cannot be empty');
                    } else {
                        var reponse = new XMLHttpRequest();
                        debugger;
                        reponse.open('GET', 'execute.php?num_a=' + numA + '&num_b=' + numB + '&arg=' + arg)
                        reponse.send();
                        reponse.onload = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("kq").innerHTML = this.responseText;
                            }
                        };
                    }
                }
            </script>
        </div>
    </div>
</body>

</html>