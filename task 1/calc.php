<?php
$result = "";
$num = $_POST['num'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
if (($num) && ($num2)) {
    switch ($operation) {
        case "Sum":
            $result = $num + $num2;
            break;
        case "Subtraction":
            $result = $num - $num2;
            break;
        case "Multiplication":
            $result = $num * $num2;
            break;
        case "Division":
            $result = $num / $num2;
            break;
        case "modulus":
            $result = $num % $num2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> calculator </h1>
                <div class="col-12 text-center text-success">
                    <b> Calc </b>
                </div>
                <div class="col-4 offset-4 my-5">
                    <form method="POST">
                        <div class="form-group">
                            <p>
                                <input type="number" name="num" id="num" required="required" value="<?php echo $num; ?>" /> <b> Number</b>
                            </p>
                            <p>
                                <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> <b> Number</b>
                            </p>
                            <input type="submit" name="operation" value="Sum" /><br>
                            <input type="submit" name="operation" value="Subtraction" /><br>
                            <input type="submit" name="operation" value="Multiplication" /><br>
                            <input type="submit" name="operation" value="Division" /><br>
                            <input type="submit" name="operation" value="modulus" /><br>

                            <div class="col-6 offset-5 text-center">
                                <p class=" btn btn-outline-danger form-control text-center mt-3"> result </p>
                            </div>
                            <?php
                            echo $result;
                            ?>
                    </form>
                </div>
            </div>


        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>