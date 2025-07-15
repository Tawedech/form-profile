<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $major = $_POST['major'];
    $gender = $_POST['gender'];
    $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : [];

    echo "<h2>ข้อมูลส่วนตัวของคุณ</h2>";
    echo "<p><strong>ชื่อ:</strong> $fname</p>";
    echo "<p><strong>สกุล:</strong> $lname</p>";
    echo "<p><strong>สาขาวิชา:</strong> $major</p>";
    echo "<p><strong>เพศ:</strong> $gender</p>";
    echo "<p><strong>งานอดิเรก:</strong> " . implode(", ", $hobby) . "</p>";
} else {
    echo "<p>กรุณาส่งข้อมูลจากฟอร์มก่อน</p>";
}
?>
