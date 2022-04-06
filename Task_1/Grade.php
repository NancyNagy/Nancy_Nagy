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
    <h1 class="container alert alert-primary text-center mt-4">Percentage and Grade</h1>
    <div class="container mt-4">
        <form method="post">
            <div class="row">
                <div class="col-6">
                    <input type="number" name="grade1" class="form-control border border-primary" placeholder="Physics Grade">
                    <input type="number" name="grade2" class="form-control mt-4 border border-primary" placeholder="Chemistry Grade">
                </div>
                <div class="col-6">
                    <input type="number" name="grade3" class="form-control border border-primary" placeholder="Biology Grade">
                    <input type="number" name="grade4" class="form-control mt-4 border border-primary" placeholder="Math Grade">
                </div>
                <div class="col-12">
                    <input type="number" name="grade5" class="form-control mt-4 border border-primary" placeholder="Computer Grade">

                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary form-control mt-4">Check</button>

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
    $grade_1 = $_POST["grade1"];
    $grade_2 = $_POST["grade2"];
    $grade_3 = $_POST["grade3"];
    $grade_4 = $_POST["grade4"];
    $grade_5 = $_POST["grade5"];
    $sum = $grade_1 + $grade_2 + $grade_3 + $grade_4 + $grade_5;
    $percentage = ($sum * 100) / 250;
    // echo $sum;
    // echo $percentage;
    if ($percentage >= 90) {
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> A </li>
        </ul>
        </div>";
    } elseif ($percentage >= 80 && $percentage < 90) {
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> B </li>
        </ul>
        </div>";
    } elseif ($percentage >= 70 && $percentage < 80) {
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> C </li>
        </ul>
        </div>";
    }elseif ($percentage >= 60 && $percentage < 70) {
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> D </li>
        </ul>
        </div>";
    }elseif ($percentage >= 40 && $percentage < 60) {
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> E </li>
        </ul>
        </div>";
    }else{
        echo "<div class='container alert alert-success text-center mt-4'>
        <ul class='list-group'>
        <li class='list-group-item'><strong>Sum:</strong> {$sum}/250 </li>
        <li class='list-group-item'><strong>Percentage:</strong> {$percentage}% </li>
        <li class='list-group-item'><strong>Grade:</strong> F </li>
        </ul>
        </div>";
    }
}













?>