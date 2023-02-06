<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add country</title>
</head>
<body>
    <h1>Add Country</h1>
    <form action ="addCountry.php" method="POST">
        <input type="text" placeholder="Enter Country code" name="CountryCode">
        <br><br>
        <input type="text" placeholder="Enter Country name" name="CountryName">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>



<?php
if(!empty($_POST['CountryCode'])&& !empty($_POST['CountryName']))
{
   
   require 'connect.php';
    $sql_insert="insert into country values (:countryCode, :countryName)";

    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':countryCode', $_POST['CountryCode']);
    $stmt->bindParam(':countryName', $_POST['CountryName']);

    if($stmt->execute())
    {
        $message='Suscessfully add new country';
        //header("Location:/business/selectCountry1php");
    }

    else
    {
        $message='Fail to add new country';
    }
    echo $message;
    $conn=null;
}
?>


