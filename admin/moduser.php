<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
    /*
     * 隐藏id框用old_id,统一获取
     * 下拉框用xxid
     * 编号用new_id
     */
    require_once('../config/mysqlconfig.php');
    $role=$_POST['role'];
    $new_id=$_POST['new_id'];
    $old_id=$_POST['old_id'];
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
    $sql="SELECT * FROM teachers";

    //先判断是否有这个id号码,其他为空啥的不做考虑
    if ($role == 'student'){
        $sql="SELECT * FROM students WHERE StudentID='$new_id'";
    }else if ($role == 'teacher'){
        $sql="SELECT * FROM teachers WHERE TeacherID='$new_id'";
    }else if ($role == 'classteacher'){
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$new_id'";
    }
    $query=mysqli_query($conn,$sql);
    $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
    if (sizeof($res)>0){
        $roleid=$role.'id';
        echo <<<EOT
            <script type=text/javascript>
                    alert("编号已经存在");
			 		window.location.href='index.php?method=moduser&role={$role}&{$roleid}={$old_id}'; 
			</script>
EOT;
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $password=$_POST['password'];
    $PhoneNum=$_POST['PhoneNum'];
    //先判断角色,再判断密码是否为修改过,如果被修改过,就生成新的md5值,如果没有,就不修改更新password字段
    if ($role == 'student'){
        $stu_id=$_POST['studentid'];
        $IDCardNo=$_POST['IDCardNo'];
        $ClassID=$_POST['ClassID'];
        $sql="SELECT * FROM students WHERE StudentID='$old_id' AND Password='$password'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        if (sizeof($res)){
            $sql="UPDATE students SET StudentID='$new_id' , Name='$name',Sex='$sex',Age='$age',IDCardNo='$IDCardNo',ClassID='$ClassID' WHERE StudentID='$old_id'";
        }else{
            $password_md5=md5($password);
            $sql="UPDATE students SET StudentID='$new_id' , Password='$password_md5',Name='$name',Sex='$sex',Age='$age',IDCardNo='$IDCardNo',ClassID='$ClassID' WHERE StudentID='$old_id'";
        }
    }else if ($role == 'teacher'){
        $tea_id=$_POST['teacherid'];
        $sql="SELECT * FROM teachers WHERE TeacherID='$old_id' AND Password='$password'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        if (sizeof($res)){
            $sql="UPDATE teachers SET TeacherID='$new_id' , Name='$name',Sex='$sex',Age='$age' WHERE TeacherID='$old_id'";
        }else{
            $password_md5=md5($password);
            $sql="UPDATE teachers SET TeacherID='$new_id' , Password='$password_md5',Name='$name',Sex='$sex',Age='$age' WHERE TeacherID='$old_id'";
        }
    }else if ($role == 'classteacher'){
        $ctea_id=$_POST['classteacherid'];
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$old_id' AND Password='$password'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        if (sizeof($res)){
            $sql="UPDATE classteachers SET ClassTeacherID='$new_id' , Name='$name',Sex='$sex',Age='$age' WHERE ClassTeacherID='$old_id'";
        }else{
            $password_md5=md5($password);
            $sql="UPDATE classteachers SET ClassTeacherID='$new_id' , Password='$password_md5',Name='$name',Sex='$sex',Age='$age' WHERE ClassTeacherID='$old_id'";
        }
    }
    $query=mysqli_query($conn,$sql);
?>
