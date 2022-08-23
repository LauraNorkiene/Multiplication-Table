<?php


$numbers = $_POST['number'];

$difficulty = $_POST['dificulty'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <table class="mx-auto" border="1">


                        <?php for ($i = 0; $i < $numbers + 1; $i++) { ?>
                            <td class='header'><?= ($i == 0) ? "&#127774" : $i  ?></td>
                        <?php  }
                        ?>
                        <?php for ($y = 1; $y < $numbers + 1; $y++) {
                        ?>
                            <tr>
                                <td class="header"><?= $y ?></td>
                                <?php for ($x = 1; $x < $numbers + 1; $x++) { ?>
                                    <td><?= (rand(0, 100) > $difficulty) ? $y * $x : '' ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>