<?php
$result = " ";
define('additional_surcharge', 0.2);
if ($_POST) {
    $consumption = $_POST['number'];
    if ($consumption < 50) {
        $result = "0.50";
    } elseif ($consumption < 150) {
        $result = "0.75";
    } elseif ($consumption < 250) {
        $result =  "1.20";
    } elseif ($consumption >= 250) {
        $result =  "1.50";
    }
    $price = $consumption * $result;
    $aftervat = $price * additional_surcharge;
    $priceAfterBill = $price + $aftervat;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electricity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> ELECTRICITY </h1>
                <div class="col-12 text-center text-success">
                    <b> price of electricity </b>
                </div>
                <div class="col-4 offset-4 my-5">
                    <form method="POST">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="number"> number </span>
                            <input type="text" name="number" id="number" class="form-control">
                        </div>
                        <div class="col-6 offset-5 text-center">
                            <button class=" btn btn-outline-danger form-control text-center mt-3"> RESULT </button>
                        </div>
                        <ul class="alert alert-success">
                            <li>
                                unit: <?php echo $result ?><b>%</b>
                            </li>
                            <li>
                                price: <?php echo $price ?><b>LE</b>
                            </li>
                            <li>
                                bill: <?php echo additional_surcharge * 100 ?><b>%</b>
                            </li>
                            <li>
                                price After Bill: <?php echo $priceAfterBill ?><b>LE</b>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>