<?php
if($_SERVER['REQUEST_METHOD'] === "GET"){
    echo "<h1>Method Not Allowed 405</h1>";
    die;
}










?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    HOSPITAL
                </h4>
            </div>
            <?php if($_post['number']) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">QUESTIONS</th>
                        <th scope="col"> BAD</th>
                        <th scope="col">GOOD</th>
                        <th scope="col">VERY GOOD</th>
                        <th scope="col">EXCELLENT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-primary col-6">Are you satisfing about the level of cleanliness?</td>
                        <td class="table-secondary"> <input name="bad" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-success"> <input name="good" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-danger"> <input name="very_good" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-warning "> <input name="excellent" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                    </tr>
                    <tr>
                        <td class="table-info col-6">Are you satisfied with the level of cleanliness?</td>
                        <td class="table-secondary"> <input class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-success"> <input class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-danger"> <input class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-warning "> <input class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                    </tr>
                    <tr>
                        <td class="table-light col-6">Are you satisfied about the price of services?</td>
                        <td class="table-secondary"> <input name="bad"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-success"> <input name="good"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-danger"> <input name="very_good" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-warning "> <input name="excellent" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                    </tr>
                    <tr>
                        <td class="table-info col-6">Are you satisfing about nursing?</td>
                        <td class="table-secondary"> <input name="bad"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-success"> <input name="good"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-danger"> <input name="very_good"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-warning "> <input name="excellent"class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                    </tr>
                    <tr>
                        <td class="table-primary col-6">Are you satisfing about the calm in hospital?</td>
                        <td class="table-secondary"> <input name="bad" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-success"> <input name="good" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-danger"> <input name="very_good" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                        <td class="table-warning "> <input name="excellent" class="form-check-input mx-4" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked></td>
                    </tr>
                    <tr>
                    <td colspan="6" class="table-active"><button class=" btn btn-outline-danger form-control text-center mt-3"> result </button></td>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>