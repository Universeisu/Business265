<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select-customer-1</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT * FROM country";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="600" border="1">
  <tr>
    <th width="80"> <div align="center">รหัสประเทศ 1</div></th>
    <th width="80"> <div align="center">ชื่อประเทศ </div></th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td><a href ="detailcountry.php?CountryCode=<?php echo $result["CountryCode"]; ?>">    
                                        <?php echo $result["CountryCode"]; ?>     
        </a>
    </td>
    
    <td>
         <?php echo $result["CountryName"];?>
    </td>


  </tr>
 
<?php
  }
?>
 
</table>
 
<?php
$conn = null;
?>
</body>
</html>
