<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="container alert alert-primary text-center mt-4">Calculator</h1>
    <div class="container mt-4">
        <form method="post">
            <input type="number" name="num_1" class="form-control" placeholder="Please enter first number"> <br>
            <input type="text" name="operator" class="form-control" placeholder="Please enter an operator (+, -, *, /, %, **)"> <br>
            <input type="number" name="num_2" class="form-control" placeholder="Please enter second number"> <br>
            <button type="submit" name="submit" class="btn btn-primary form-control">Calculate</button>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php

if ($_POST) {
    $num_1 = $_POST["num_1"];
    $sign = $_POST["operator"];
    $num_2 = $_POST["num_2"];
    if ($sign == '+') {
        echo "<div class='container alert alert-success text-center mt-4'>
      <h4>" . $num_1 + $num_2 . "</h4>
        </div>";
    } elseif ($sign == '-') {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4>" . $num_1 - $num_2 . "</h4>
          </div>";
    } elseif ($sign == '*') {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4>" . $num_1 * $num_2 . "</h4>
          </div>";
    } elseif ($sign == '/') {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4>" . $num_1 / $num_2 . "</h4>
          </div>";
    } elseif ($sign == '%') {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4>" . $num_1 % $num_2 . "</h4>
          </div>";
    }elseif ($sign == '**') {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4>" . $num_1 ** $num_2 . "</h4>
          </div>";
    }else {
        echo "<div class='container alert alert-success text-center mt-4'>
        <h4> Please enter valid operator </h4>
          </div>";
    }
}












?>