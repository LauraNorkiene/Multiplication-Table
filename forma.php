<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h2 class="text-center text-white mt-5 ">Multiplication Table Worksheets</h2>
    <hr class="title">
    <form action="table.php" method="POST">


        <div class="row justify-content-center">
            <div class="col-2">

                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Number set:</h5>
                        <hr class="sub">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="number" id="inlineRadio1" value="5">
                            <label class="form-check-label" for="inlineRadio1">1 to 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="number" id="inlineRadio2" value="10">
                            <label class="form-check-label" for="inlineRadio2"> 1 to 10</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="number" id="inlineRadio3" value="15">
                            <label class="form-check-label" for="inlineRadio3"> 1 to 15</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Difficulty:</h5>
                        <hr class="sub">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dificulty" id="inlineRadio1" value="10">
                            <label class="form-check-label" for="inlineRadio1">Easy (10%)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dificulty" id="inlineRadio2" value="30">
                            <label class="form-check-label" for="inlineRadio2"> Medium (30%)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dificulty" id="inlineRadio3" value="50">
                            <label class="form-check-label" for="inlineRadio3"> Medium (50%)</label>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <button class="btn btn-light">Generate</button>
        </div>
    </form>



</body>

</html>