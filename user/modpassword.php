<form method="post" action="">
    旧的密码:<input type="password" name="oldpassword">
    </br>
    新的密码:<input type="password" name="newpassword">
    </br>
    <input type="submit" name="submit" value="确认修改">
</form>
<?php
    session_start();
    require_once('../config/mysqlconfig.php');
    $type=-1;
    if (isset($_SESSION['studentid'])){
        $id=$_SESSION['studentid'];
        $type=0;
    }else if (isset($_SESSION['teacherid'])){
        $id=$_SESSION['teacherid'];
        $type=1;
    }else if (isset($_SESSION['classteacherid'])){
        $id=$_SESSION['classteacherid'];
        $type=2;
    }
    if ($type == -1){
        //跳转到登陆页面
    }else{
        if (isset($_POST['submit'])){
            $oldpassword=$_POST['oldpassword'];
            $newpassword=$_POST['newpassword'];
            if (check_oldpassword($id,$type,$oldpassword) == true){
                if (modpassword($id,$type,$newpassword) == true){
                    echo "修改成功";
                }else{
                    echo "修改失败";
                }
            }else{
                echo "旧的密码错误";
            }
        }
    }
    function check_oldpassword($id,$type,$oldpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $oldpassword_md5=md5($oldpassword);
        if ($type == 0){
            $sql="SELECT * FROM students WHERE StudentID='$id' AND Password='$oldpassword_md5'";
        }else if ($type == 1){
            $sql="SELECT * FROM teachers WHERE TeacherID='$id' AND Password='$oldpassword_md5'";
        }else if ($type == 2){
            $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$id' AND Password='$oldpassword_md5'";
        }
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        mysqli_close($conn);
        if (sizeof($res)>0){
            return true;
        }else {
            return false;
        }
    }
    function modpassword($id,$type,$newpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $newpassword_md5=md5($newpassword);
        if ($type == 0){
            $sql="UPDATE students SET Password='$newpassword_md5' WHERE StudentID='$id'";
        }else if ($type == 1){
            $sql="UPDATE teachers SET Password='$newpassword_md5' WHERE TeacherID='$id'";
        }else if ($type == 2){
            $sql="UPDATE classteachers SET Password='$newpassword_md5' WHERE ClassTeacherID='$id'";
        }
        $query=mysqli_query($conn,$sql);
        //这里怎么判断UPDATE是否成功
        return true;
    }
?>