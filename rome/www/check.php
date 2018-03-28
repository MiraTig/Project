<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$id = $password = "";
$id_err = $password_err = "";
 
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = trim($_POST["id"]);

    $password = trim($_POST['password']);
//     // Validate credentials
    if(empty($id_err) && empty($password_err)){
        session_start();
        $sql = "SELECT * FROM user WHERE id=$id";
        $result = $link->query($sql);
        if ($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            if($row['pwd']!=$password)
            {

                $password_err = 'Введенный пароль не верен!';
                $_SESSION['password_err'] = $password_err;
                $_SESSION['id_err']='';
                header("location: login.php");
                exit;
                
            }
            
            
            $_SESSION['username'] = $row['name']; 
            $_SESSION['id'] = $row['id']; 
            $_SESSION['role'] = $row['role'];
            $_SESSION['password_err']='';
            $_SESSION['id_err']='';
            header("location: index.php");
        }
        else
        {
            $_SESSION['password_err']='';
            $id_err= 'Аккаунт с ID&nbsp;&nbsp;"'.$_POST["id"].'" не существует!';
            $_SESSION['id_err'] = $id_err;
            header("location: login.php");
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>