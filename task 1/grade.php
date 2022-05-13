<?php
$final_r ="";
define('max_grade',500);
if ($_POST) {
    $grade_m = $_POST['grade_m'];
    $grade_s = $_POST['grade_s'];
    $grade_e = $_POST['grade_e'];
    $grade_a = $_POST['grade_a'];
    $grade_b = $_POST['grade_b'];
    $sum = $grade_m + $grade_s + $grade_e + $grade_a + $grade_b;
    $total = $sum / max_grade;
    $Percentage = $total * 100; 
    if($total >= 90) {
      $final_r = "Grade A";
    } elseif ($total >= 80) {
        $final_r = "Grade B";
    } elseif ($total >= 70) {
        $final_r = "Grade C";
    } elseif ($total >= 60) {
        $final_r = "Grade D";
    } elseif ($total >= 40) {
        $final_r = "Grade E";
    }
    elseif ($total > 40) {
        $final_r = "Grade F";
    }}   
    


?>













<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> grades of exams </h1>
                <div class="col-12 text-center text-success">
                <b> G OF EX </b>
                </div>
                <div class="col-4 offset-4 my-5">
                <form method="POST">
                <div class="form-group">
                        <label for="grade_student">math</label>
                        <input type="text" name="grade_m" id="grade_m" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade_student">science</label>
                        <input type="text" name="grade_s" id="grade_s" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade_student"> english </label>
                        <input type="text" name="grade_e" id="grade_e" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade_student"> arabic </label>
                        <input type="text" name="grade_a" id="grade_a" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade_student"> biology </label>
                        <input type="text" name="grade_b" id="grade_b" class="form-control">
                        <div class="col-6 offset-3  mt-5">
                
                    </div>
<div class="col-6 offset-5 text-center">
<button class=" btn btn-outline-danger form-control text-center mt-3"> RESULT </button>
</div>
<ul class="alert alert-success">
                    <li>
                    percentage : <?php echo $Percentage .' '.$final_r ?><b>%</b>
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
