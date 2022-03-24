<?php
if (isset($_POST["submitInsertData"])) {

    include_once("api/config/connect_db_file.php"); 
                 
    $dt_image1_time = md5(date("Y-m-d h:i:s"));
    $dt_image1 = uniqid() . $dt_image1_time . $_FILES["a_file"]["name"]; 

    $sql = "INSERT INTO afile (`a_id`,`a_file`)  VALUES (NULL, '" . $dt_image1 . "');";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('บันทึกข้อมูลสำเร็จ');";
        echo "</script>";
        // path ที่จะใช้เก็บภาพที่อัปโหลดไป
        $path = "../../images/drm/";
        move_uploaded_file($_FILES["dt_image1"]["tmp_name"], "$path/$dt_image1");

    } else {
        echo "<script>";
        echo "alert('ไม่สามารถลบข้อมูลได้');";
        echo "</script>";
    }

}