<?php session_start() ?>

<!doctype html>
<html lang="en">

<head>
    <title>Review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="Result.php" method="post">
    <table class="container table table-striped table-dark mt-4">
        <thead>
            <tr>
                <th class="col-4">Question</th>
                <th class="col-1 text-center">Excellent</th>
                <th class="col-1 text-center">Very Good</th>
                <th class="col-1 text-center">Good</th>
                <th class="col-1 text-center">Bad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Are you satisfied with the level of cleanliness?</th>
                <td class="text-center"><input class="form-check-inline" type="radio" name="cleanliness" value="Excellent" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="cleanliness" value="Very Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="cleanliness" value="Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="cleanliness" value="Bad" id="flexRadioDefault1"></td>

            </tr>
            <tr>
                <th>Are you satisfied with the service prices?</th>
                <td class="text-center"><input class="form-check-inline" type="radio" name="prices" value="Excellent" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="prices" value="Very Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="prices" value="Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="prices" value="Bad" id="flexRadioDefault1"></td>
            </tr>
            <tr>
                <th>Are you satisfied with the nursing service?</th>
                <td class="text-center"><input class="form-check-inline" type="radio" name="nursing" value="Excellent" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="nursing" value="Very Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="nursing" value="Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="nursing" value="Bad" id="flexRadioDefault1"></td>
            </tr>
            <tr>
                <th>Are you satisfied with the doctor professional level?</th>
                <td class="text-center"><input class="form-check-inline" type="radio" name="proLevel" value="Excellent" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="proLevel" value="Very Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="proLevel" value="Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="proLevel" value="Bad" id="flexRadioDefault1"></td>
            </tr>
            <tr>
                <th>Are you satisfied with the hospital quietness?</th>
                <td class="text-center"><input class="form-check-inline" type="radio" name="quietness" value="Excellent" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="quietness" value="Very Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="quietness" value="Good" id="flexRadioDefault1"></td>
                <td class="text-center"><input class="form-check-inline" type="radio" name="quietness" value="Bad" id="flexRadioDefault1"></td>
            </tr>
        </tbody>
    </table>
    <button type="submit"  class="container btn btn-primary btn-lg btn-block mt-4">Result</button>

    </form>

    <?php $_SESSION["phone"] = $_POST['phone'] ?? '';  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>