<?php
$sqrt = '';
// $num = "";
// $power = " ";
$num = $_POST ['num_r'];
$power = $_POST ['power'];
$sqrt = ($num ** (1/$power));


?>













<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N OR P</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h1> ROOT </h1>
                <div class="col-12 text-center text-success">
                <b> Get The Root </b>
                </div>
                <div class="col-4 offset-4 my-5">
                <form method="POST">
                <div class="form-group">
                        <label for="num_r">NUMBER</label>
                        <input type="text" name="nom_r" id="nom_r" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="power">POWER</label>
                        <input type="text" name="power" id="power" class="form-control">
                    </div>
<div class="col-6 offset-5 text-center">
<button class=" btn btn-outline-danger form-control text-center mt-3"> ROOT </button>
</div>
<?php echo $sqrt; ?>
</form>
</div>
</div>
                   
    
</div>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
