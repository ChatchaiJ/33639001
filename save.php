<html>
<head>
</head>
<body>
<?php

ini_set('display_errors', 1);

$dbhost = "localhost";
$dbuser = "p33639001";
$dbpass = "p33639001";
$dbname = "p33639001";

$dsn = "mysql:host=$dbhost;dbname=$dbname";

$sender_save_addr = $_POST['sender_save_addr'];
$recipient_save_addr = $_POST['recipient_save_addr'];

$sender_name = $_POST['sender_name'];
$sender_phone = $_POST['sender_phone'];
$sender_address = $_POST['sender_address'];
$sender_district = $_POST['sender_district'];
$sender_amphoe = $_POST['sender_amphoe'];
$sender_province = $_POST['sender_province'];
$sender_zipcode = $_POST['sender_zipcode'];

$recipient_name = $_POST['recipient_name'];
$recipient_phone = $_POST['recipient_phone'];
$recipient_address = $_POST['recipient_address'];
$recipient_district = $_POST['recipient_district'];
$recipient_amphoe = $_POST['recipient_amphoe'];
$recipient_province = $_POST['recipient_province'];
$recipient_zipcode = $_POST['recipient_zipcode'];
$recipient_cash_on_delivery = isset($_POST['recipient_cash_on_delivery'])?$_POST['recipient_cash_on_delivery']:0;
$recipient_cash = $_POST['recipient_cash'];

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (! $sender_save_addr and ! $recipient_save_addr) {
    echo "<h2>ไม่มีการบันทึกข้อมูล ทั้งผู้รับและผู้ส่ง</h2>";
} else {

    if ($sender_save_addr) {
        $sql =  "INSERT INTO sender (name, phone, address, district, amphoe, province, zipcode)" .
                " VALUES (?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                       $sender_name,
                       $sender_phone,
                       $sender_address,
                       $sender_district,
                       $sender_amphoe,
                       $sender_province,
                       $sender_zipcode
                      ]);
        $res = $stmt->rowCount();
        echo "<h2>บันทึกข้อมูลผู้ส่ง : " . ($res==1?"สำเร็จ":"ผิดพลาด") . "</h2>";

    }
    if ($recipient_save_addr) {
        $sql =  "INSERT INTO recipient (name, phone, address, district, amphoe, province, zipcode, cash)" .
                " VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                       $recipient_name,
                       $recipient_phone,
                       $recipient_address,
                       $recipient_district,
                       $recipient_amphoe,
                       $recipient_province,
                       $recipient_zipcode,
                       $recipient_cash_on_delivery?$recipient_cash:0
                      ]);

        $res = $stmt->rowCount();
        echo "<h2>บันทึกข้อมูลผู้รับ : " . ($res==1?"สำเร็จ":"ผิดพลาด") . "</h2>";
    }
}

echo "<h1>ข้อมูลผู้ส่ง</h1>";
$sql = "SELECT * FROM sender";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
foreach ($res as $row) {
    echo $row['id'] . "," .
         $row['name'] . "," .
         $row['phone'] . "," .
         $row['address'] . "," .
         $row['district'] . "," .
         $row['amphoe'] . "," .
         $row['province'] . "," .
         $row['zipcode'] . "<br>";
}

echo "<h1>ข้อมูลผู้รับ</h1>";
$sql = "SELECT * FROM recipient";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
foreach ($res as $row) {
    echo $row['id'] . "," .
         $row['name'] . "," .
         $row['phone'] . "," .
         $row['address'] . "," .
         $row['district'] . "," .
         $row['amphoe'] . "," .
         $row['province'] . "," .
         $row['zipcode'] . "," .
         $row['cash'] . "<br>";
}

?>
</body>
</html>
