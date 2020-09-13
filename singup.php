<?php
include_once 'config.php';

date_default_timezone_set("Asia/Bangkok");
$insertdate = date("Y-m-d H:i:s");

if (isset($_POST['Singup']) || !empty($_FILES["file"]["name"])) {

    $Username  = $_POST['Username'];
    $Email     = $_POST['Email'];
    $Firstname = $_POST['Firstname'];
    $Lastname  = $_POST['Lastname'];
    $Password  = $_POST['Password'];
    $image = basename($_FILES["file"]["name"]);
    $targetDir = "upload/";
    $FilePath = $targetDir . $image;
    $fileType = pathinfo($FilePath, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $FilePath)) {

            $sql = "INSERT INTO user (ID, Username, Email, Password, Firstname, Lastname, Userstatus, Datetime, Images)
                    VALUES ('','$Username','$Email','$Password','$Firstname','$Lastname','Member','$insertdate','" . $image . "')";
        }
    }
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        Header("Location: form_login.php");
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        Header("Location: form_singup.php");
    }
    mysqli_close($conn);
}?>
