<?php session_start() ?>

<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <table class="container table table-striped table-dark mt-4">
            <thead>
                <tr>
                    <th class="col-4">Question</th>
                    <th class="col-1 text-center">Reviews</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Are you satisfied with the level of cleanliness?</th>
                    <td class="text-center"><?php echo $_POST['cleanliness'] ?? ''; ?></td>
                </tr>
                <tr>
                    <th>Are you satisfied with the service prices?</th>
                    <td class="text-center"><?php echo $_POST['prices'] ?? ''; ?></td>
                </tr>
                <tr>
                    <th>Are you satisfied with the nursing service?</th>
                    <td class="text-center"><?php echo $_POST['nursing'] ?? ''; ?></td>
                </tr>
                <tr>
                    <th>Are you satisfied with the doctor professional level?</th>
                    <td class="text-center"><?php echo $_POST['proLevel'] ?? ''; ?></td>
                </tr>
                <tr>
                    <th>Are you satisfied with the hospital quietness?</th>
                    <td class="text-center"><?php echo $_POST['quietness'] ?? ''; ?></td>
                </tr>
            </tbody>
        </table>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php


$result = 0;
foreach ($_POST as $key => $answer) {
    if ($answer == 'Excellent') {
        $result += 10;
    } elseif ($answer == 'Very Good') {
        $result += 5;
    } elseif ($answer == 'Good') {
        $result += 3;
    } elseif ($answer == 'Bad') {
        $result += 0;
    }
}
if ($result >= 25) {
    echo "<div class='container alert alert-success text-center offset-4 col-4'>
            <strong><h3>Thank you</h3></strong>
          </div>";
} else {
    echo "<div class='container alert alert-danger text-center offset-4 col-4'>
                <strong>
                <h4>
                    We will call you later on this phone number " .  $_SESSION["phone"] .
                "</h4>
                </strong>
          </div>";
}





































?>