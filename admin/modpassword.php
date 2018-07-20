<?php
    session_start();
    require_once('../config/mysqlconfig.php');
    $type=-1;
    if (isset($_SESSION['admin'])){
        $username=$_SESSION['admin'];
            $oldpassword=$_POST['oldpassword'];
            $newpassword=$_POST['newpassword'];
            if (check_oldpassword($username,$oldpassword) == true){
                if (modpassword($username,$newpassword) == true){
                    echo "修改成功";
                }else{
                    echo "修改失败";
                }
            }else{
                echo "旧的密码错误";
            }

    }else{
        //跳转到登陆页面
    }
    function check_oldpassword($username,$oldpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $oldpassword_md5=md5($oldpassword);
        $sql="SELECT * FROM admin WHERE username='$username' AND password='$oldpassword_md5'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        mysqli_close($conn);
        if (sizeof($res)>0){
            return true;
        }else {
            return false;
        }
    }
    function modpassword($username,$newpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $newpassword_md5=md5($newpassword);
        $sql="UPDATE admin SET password='$newpassword_md5' WHERE username='$username'";
        $query=mysqli_query($conn,$sql);
        //这里怎么判断UPDATE是否成功
        return true;
    }
?>