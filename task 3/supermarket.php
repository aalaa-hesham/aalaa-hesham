<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $clientName = $_POST['user-name'];
    $city = $_POST['city'];
    $number_of_varieties = $_POST['number_of_varieties'];
    if ($_POST['city'] == 'Cairo') {
        $delivery = 0;
    } elseif ($_POST['city'] == "Alex") {
        $delivery = 50;
    } elseif ($_POST['city'] == "Giza") {
        $delivery = 30;
    } else {
        $delivery = 100;
    }

    if (isset($_POST['submit'])) {
            $table1 = "<table class='table m-3'>";
            $table1 .= "<thead class='table'>";
            $table1 .= "<tr class = 'text-center'>";
            $table1 .= "<th scope='col'> Product name </th>";
            $table1 .= "<th scope='col'> Price </th>";
            $table1 .= "<th scope='col'> Quantities </th>";
            $table1 .= "</tr>";
            $table1 .= "</thead>";
            $table1 .= "<tbody>";
            for ($i = 1; $i <= $number_of_varieties; $i++) {
                $table1 .= "<tr>";
                $table1 .= "<td class ='col'><input name='ProductName{$i}' type='text'></td>";
                $table1 .= "<td class ='col'><input name='Price{$i}' type='number'></td>";
                $table1 .= "<td class ='col'><input name='Quantities{$i}' type='number'></td>";
                $table1 .= "</tr>";
            }
            $table1 .= "</tdody>";
            $table1 .= "</table>";
            $table1 .= "<button type='submit' name= 'submitProduct' class=' btn btn-outline-danger form-control text-center mt-3'>Receipt</button>";
    }
    if (isset($_POST['submitProduct'])) {
        $tableProduct = '<table class="table">';
        $tableProduct .= "<th scope='col'> Product name </th>";
        $tableProduct .= "<th scope='col'> Price </th>";
        $tableProduct .= "<th scope='col'> Quantities </th>";
        $tableProduct .= "<th scope='col'> Subtotal </th>";

        $tableProduct .= "</tr>";
        $tableProduct .= "</thead>";
        $tableProduct .= "<tbody>";
        $total = 0;
        for ($i = 1; $i <= $number_of_varieties; $i++) {
            $ProductName = $_POST['ProductName' . $i];
            $Price = $_POST['Price' . $i];
            $Quantities = $_POST['Quantities' . $i];
            $subTotal = $Price * $Quantities;
            $total += $subTotal;
            $tableProduct .= "<tr>";
            $tableProduct .= '<td>' . $ProductName . '</td>';
            $tableProduct .= '<td>' . $Price  . '</td>';
            $tableProduct .= '<td>' . $Quantities . '</td>';
            $tableProduct .= '<td>' . $subTotal . '</td>';
            $tableProduct .= "</tr>";
        }
        if ($total < 1000) {
            $discount = 0;
        } elseif ($total < 3000) {
            $discount = 0.10;
        } elseif ($total < 4500) {
            $discount = 0.15;
        } else {
            $discount = 0.20;
        }
        $discountValue = $total * $discount;
        $totalAfterDiscount = $total - $discountValue;
        $netTotal = $totalAfterDiscount + $delivery;

        $tableProduct .= "<tr>";
        $tableProduct .= '<td> client name </td>';
        $tableProduct .= '<td>' . $clientName . '<b>EGP </b></td>';
        $tableProduct .= "</tr>";
        $tableProduct .= "<tr>";

        $tableProduct .= '<td> city </td>';
        $tableProduct .= '<td>' . $city . '<b> EGP </b></td>';
        $tableProduct .= "</tr>";
        $tableProduct .= "<tr>";

        $tableProduct .= '<td> Total </td>';
        $tableProduct .= '<td>' . $total . '<b> EGP </b></td>';
        $tableProduct .= "</tr>";
        $tableProduct .= "<tr>";

        $tableProduct .= '<td> Discount </td>';
        $tableProduct .= '<td>' .  $discountValue  . '<b> EGP </b></td>';
        $tableProduct .= "</tr>";
        $tableProduct .= "<tr>";

        $tableProduct .= '<td> Total after discount </td>';
        $tableProduct .=  '<td>' . $totalAfterDiscount. '<b> EGP </b></td>';

        $tableProduct .=  '<td> Delivery </td>';
        $tableProduct .=  '<td>' . $delivery . '<b> EGP </b></td>';
        $tableProduct .= "</tr>";
        $tableProduct .= "<tr>";

        $tableProduct .=  '<td> Net Total </td>';
        $tableProduct .=  '<td>' . $netTotal . '<b> EGP </b></td>';
        $tableProduct .= "<tr>";

        $tableProduct .= '</tbody>';
        $tableProduct .= '</table>';
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supermarket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> supermarket </h1>
                <div class="col-4 offset-4 my-5">
                    <form method="POST">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="number"> user name </span>
                            <input type="text" name="user-name" id="number" class="form-control" value="<?php echo $clientName ?? ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="City">City</label>
                            <select name="city" id="city" class='form-control'>
                                <option value="Cairo" <?php if (isset($city) && $city == 'Cairo') {
                                                            echo 'selected';
                                                        }; ?>> Cairo </option>
                                <option value="Alex " <?php if (isset($city) && $city == 'Alex') {
                                                            echo 'selected';
                                                        }; ?>>Alex</option>
                                <option value="Giza" <?php if (isset($city) && $city == 'Giza') {
                                                            echo 'selected';
                                                        }; ?>>Giza</option>
                                <option value="Others" <?php if (isset($city) && $city == 'Others') {
                                                            echo 'selected';
                                                        }; ?>>Others</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-center" id="number_of_varieties"> number of varieties </span>
                            <input type="number" name="number_of_varieties" id="number_of_varieties" class="form-control" value="<?php echo $number_of_varieties ?? ""; ?>">
                        </div>
                        <div class="col-6 offset-5 text-center">
                            <button type="submit" name="submit" class=" btn btn-outline-danger form-control text-center mt-3"> enter products </button>
                            <br>
                            <?php echo $table1 ?? ""; ?>
                            <br>
                            <?php echo $tableProduct ?? "" ?>
                        </div>


                    </form>
                </div>
            </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>