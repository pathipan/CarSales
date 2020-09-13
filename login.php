<?php
session_start();
if (isset($_POST['Username'])) {
  //connection
  include_once ("config.php");
  //รับค่า user & password
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  //query 
  $sql = "SELECT * FROM user Where Username='" . $Username . "' and Password='" . $Password . "' ";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

    $_SESSION["UserID"] = $row["ID"];
    $_SESSION["User"] = $row["Firstname"] . " " . $row["Lastname"];
    $_SESSION["Userstatus"] = $row["Userstatus"];
    $_SESSION["Images"] = "<img src='upload/".$row['Images']."' >";

    if ($_SESSION["Userstatus"] == "Admin") { //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

      Header("Location: admin_page.php");
    }

    if ($_SESSION["Userstatus"] == "Member") {  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

      Header("Location: user_page.php");
    }
  } else {
    echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
    echo "window.history.back()";
    echo "</script>";
  }
} else {


  Header("Location: form_login.php"); //user & password incorrect back to login again

}
