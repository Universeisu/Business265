<?php
try {
    require 'connect.php';
    $sql = 'SELECT * FROM country ' 
   
;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //แบบที่ 1
    //while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
       // echo '<br>' .
            //'รหัสลูกค้าของฉันแบบที่ 1 : ' .
            //$result['CustomerID'] .//case sensitive ตัวใหญ่ตัวเล็กต้องตรงตาม Database
            //' วันเกิด : ' .
            //$result['Birthdate'] .// . = เชื่อมตัวแปร
            //' ยอดหนี้ : ' .
           // $result['OutstandingDebt'];
   // }
    //Loop whlie ได้ต้องเป็นจริง ต้องมีข้อมูล 
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
         echo '<br>' .
            "CountryCode : " .
             $result [0] .//case sensitive ตัวใหญ่ตัวเล็กต้องตรงตาม Database
             " Countryname : " . $result[1] 
           ;
     }

} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}

$conn = null;
?>


