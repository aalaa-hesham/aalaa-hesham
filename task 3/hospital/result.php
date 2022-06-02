<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo "<h1>Method Not Allowed 405</h1>";
    die;
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $phone = $_POST['phone'];
    $radioNoLabel = $_POST['radioNoLabel'];
    $radioNoLabe2 = $_POST['radioNoLabe2'];
    $radioNoLabe3 = $_POST['radioNoLabe3'];
    $radioNoLabe4 = $_POST['radioNoLabe4'];
    $radioNoLabe5 = $_POST['radioNoLabe5'];
    $answers = [
        0 => 'bad',
        3 => 'good',
        5 => 'very_good',
        10 => 'excellent',
    ];
    $total  = array_search($radioNoLabel, $answers) + array_search($radioNoLabe2, $answers) + array_search($radioNoLabe3, $answers) + array_search($radioNoLabe4, $answers) + array_search($radioNoLabe5, $answers);
    if ($total <= 25) {
        $finalResult  = "we call you later on this  $phone ";
    } else {
        $finalResult = "Thank You";
    }

    $hospitaltable = '<table class="table col font-weight-bold offset-3 mt-5 ml-1" style="width: 615px height: 489px ;">
        <thead>
             <tr>
             <th class="text-center" scope="col"> Questions </th>
             <th class="text-center" scope="col"> reviews </th>
             </tr>
             </thead>
             <tbody>';
    $hospitaltable .= '<tr>
           <td class="table-primary col-6">Are you satisfing about the level of cleanliness?</td>';
    $hospitaltable .= '<td class="table-success text-center ">' . $radioNoLabel . '</td>
           </tr>';
    $hospitaltable .= "<tr>
           <td class='table-primary col-6'>Are you satisfied about doctors?</td>";
    $hospitaltable .= "<td class='table-success text-center col-3'>" . $radioNoLabe2 . "</td>
           </tr>";
    $hospitaltable .= "<tr>
           <td class='table-primary col-6'>Are you satisfied about the price of services?</td>";
    $hospitaltable .= "<td class='table-success text-center col-3'>" . $radioNoLabe3 . "</td>
           </tr>";
    $hospitaltable .= "<tr>
           <td class='table-primary col-6'>Are you satisfing about nursing?</td>";
    $hospitaltable .= "<td class='table-success text-center col-3'>" . $radioNoLabe4 . "</td>
           </tr>";
    $hospitaltable .= "<tr>
           <td class='table-primary col-6'>Are you satisfing about the calm in hospital?</td>";
    $hospitaltable .= "<td class='table-success text-center col-3'>" . $radioNoLabe5 . "</td>
           </tr>";
          
          $hospitaltable .='<tr> 
          <td colspan="6" class=" text-center table-active">' . $finalResult . '</td>
              </tr>';  
          $hospitaltable .= "</tdody>
        </table>";
}


echo $hospitaltable ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>