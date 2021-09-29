<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Cursos gratuítos de desenvolvimento Android</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/landing-page.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/js/jquery.mask.min.js" type="text/javascript"/></script>
    <script src="src/js/jquery.validate.min.js"></script>
<?php
include_once  ('database.php');
$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

?>

</head>
<main class="terms-wrapper">
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">produto</th>
        <th scope="col">cor</th>

    </tr>
    </thead>
    <tbody>
<?php
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<tr>';
        echo "<th scope='row'>".$row['idprod']. "</th>";
        echo "<td>".$row['nome']. "</td>";
        echo "<td>".$row['cor']. "</td>";
        echo "<td>  <a href='update.php?id=".$row["idprod"]. "'>alterar</a> </td>";
        echo "<td>  <a href='landingData.php?query=delete&id=".$row["idprod"]. "'>deletar</a> </td>";



   echo  '</tr>';
    }
    }?>

<div class="text-center ct-u-paddingTop30">

   <a href="index.php"> <input  class="btn btn-large btn-motive submit " type="submit"
           value="Novo Produto"></a>
</div>
    </tbody>
</table>
</main>