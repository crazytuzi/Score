<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password_md5=md5($password);
    echo $password_md5."</br>";
    echo $username."</br>".$password."</br>";
    require_once('../model/mysql.class.php');
    require_once('../config/mysqlconfig.php');
    $db=new mysql();
    $link=$db->connect2();
    var_dump($db);
    //先判断是否为管理员登陆
    $sql="SELECT * FROM admin where username='$username' and password='$password_md5'";
    $mysqli_num_rows=$db->getTotalRows($sql);
    $db->close($link);
    if ($mysqli_num_rows>0){
        session_start();
        $_SESSION['admin']=$username;
        echo <<<EOT
            <script type=text/javascript>
			 		window.location.href='index.php'; 
			</script>
EOT;
    }else{
        echo <<<EOT
            <script type=text/javascript>
                    alert("登陆失败");
			 		window.location.href='login.php'; 
			</script>
EOT;
    }
?>