<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="container alert alert-dark text-center mt-4">Bank</h1>
    <div class="container mt-4">
        <form method="post">
            <input type="text" name="username" class="form-control" value="<?php echo $_POST['username'] ?? ''; ?>"> <br>
            <input type="number" name="loan" class="form-control" placeholder="Please enter the loan amount" value="<?php echo $_POST['loan'] ?? ''; ?>"> <br>
            <input type="number" name="years" class="form-control" placeholder="Please enter the loan years" value="<?php echo $_POST['years'] ?? ''; ?>"> <br>
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
    $name = $_POST["username"];
    $loan = $_POST["loan"];
    $years = $_POST["years"];
    $months = $years * 12;

    if ($years <= 3) {
        $rate = 0.1;
    } else {
        $rate = 0.15;
    }
    $int_rate = ($loan * $rate) * $years;
    $int_loan = $loan + $int_rate;
    $monthly_payment = $int_loan / $months;
    echo "<table class='container table table-striped table-dark mt-4 '>
                <thead>
                    <tr>
                        <th> Username </th>
                        <th> Interest_rate </th>
                        <th> Interest_loan </th>
                        <th> Monthly_payment </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{$name}</td>
                        <td>{$int_rate}</td>
                        <td>{$int_loan}</td>
                        <td>{$monthly_payment}</td>

                </tbody>
            </table>";                                                                                                                                                             
}
?>