<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
    require_once('../config/mysqlconfig.php');
    $role=$_POST['role'];
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $role=$_POST['role'];
    $sex=$_POST['sex'];
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
    if ($role == "student"){//学生
        $sql="SELECT * FROM students WHERE StudentID='$id'";
    } else if($role == "teacher"){//老师
        $sql="SELECT * FROM teachers WHERE TeacherID='$id'";
    }else{//班主任
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$id'";
    }
    $query=mysqli_query($conn,$sql);
    $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
    if (sizeof($res)>0){
        echo <<<EOT
            <script type=text/javascript>
                    alert("已经存在该用户");
			 		window.location.href='index.php?method=adduser&role={$role}'; 
			</script>
EOT;
    }else{
        $password_md5=md5($password);
        if ($role == "student"){//学生
            $IDCardNo=$_POST['IDCardNo'];
            $ClassID=$_POST['ClassID'];
            $sql="INSERT INTO students (StudentID, Name, Password,Sex,Age,IDCardNO,ClassID) VALUES ('$id', '$username', '$password_md5','$sex','$age','$IDCardNo','$ClassID')";
        } else if($role == "teacher"){//老师
            $sql="INSERT INTO teachers (TeacherID, Name, Password,Sex,Age) VALUES ('$id', '$username', '$password_md5','$sex','$age')";
        }else{//班主任
            $sql="INSERT INTO classteachers (ClassTeacherID, Name, Password,Sex,Age) VALUES ('$id', '$username', '$password_md5','$sex','$age')";
        }
        $query=mysqli_query($conn,$sql);
        if ($query){
            echo "成功";
        }else{
            echo "失败";
        }
    }
?>