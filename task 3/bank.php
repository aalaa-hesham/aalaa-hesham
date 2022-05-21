<?php
$rate = " ";
define('repayment', 0.10);
define('repayment2', 0.15);
if ($_POST) {
    $user = $_POST['user-name'];
    $amount = $_POST['loan-amount'];
    $yloan = $_POST['loan-years'];
    if ($yloan <= 3) {
        $rate = repayment * $yloan * $amount;
    } else {
        $rate = repayment2 * $yloan * $amount;
    }
    $afterinterest = $rate + $amount;
    $year = $yloan * 12;
    $monthly = $afterinterest / $year;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> BANK </h1>
                <div class="col-4 offset-4 my-5">
                    <form method="POST">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="number"> user name </span>
                            <input type="text" name="user-name" id="number" class="form-control">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="number"> loan amount </span>
                            <input type="number" name="loan-amount" id="loan-amount" class="form-control">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="loan-years"> loan years </span>
                            <input type="number" name="loan-years" id="loan-years" class="form-control">
                        </div>
                        <div class="col-6 offset-5 text-center">
                            <button class=" btn btn-outline-danger form-control text-center mt-3"> calculate </button>
                        </div>
                        <?php if ($_POST) { ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">user name</th>
                                        <th scope="col">interest rate</th>
                                        <th scope="col">Loan after interest</th>
                                        <th scope="col">monthly</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $user ?></th>
                                        <td><?php echo $rate ?></td>
                                        <td><?= $afterinterest ?></td>
                                        <td><?= $monthly ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } ?>

                    </form>
                </div>
            </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>