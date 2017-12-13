<?php
$connect = mysqli_connect("localhost", "root", "", "pondokit");
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!empty($email) && !empty ($password)) {
    $sql = mysqli_query($connect,"SELECT * FROM user_id WHERE email='$email' and password='$password'");
    $result = mysqli_num_rows($sql);
    if ($result) {
      $row = mysqli_fetch_array($sql);
      session_start();
      $_SESSION['login']= true;
      $_SESSION['email']= $email;
      $_SESSION['nama']= $row['nama'];
      echo "login berhasil";
    } else {
      echo "Email dan password anda salah";
    }
  }
  else {
    echo "Email dan password anda kosong, silahkan diisi.";
  }
?>