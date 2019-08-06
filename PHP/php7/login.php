<?php
    session_start();
    //Lấy dữ liệu từ nút checkbox
    if (isset($_POST['btn_login'])) {
        //Nhận dữ liệu từ file form_login gửi lên
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        
        $memory = isset($_POST['memorize']) ? $_POST['memorize'] : "";
        
        if($username == "admin" && $password == "admin"){
            //Cấp phiên làm việc
            $_SESSION['user'] = $username;
            if($memory == "on"){
                setcookie('cUser',$username, time()+2*3600);
                setcookie('cPass',$password, time()+2*3600);
            }
            echo "Xin chào: ". $_SESSION['user'];
        }else{
            header("location:form_login.php");
        }
    }else{
        header("location:form_login.php");
    }
?>
