<?php
    require_once('../config/mysqlconfig.php');
    $del=@$_POST['del'];
    $role=$_POST['role'];
    if ($del == ""){
        echo <<<EOT
            <script type=text/javascript>
                    alert("没有选中");
			 		window.location.href='index.php?method=deluser&role={$role}'; 
			</script>
EOT;
    }else{
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        if ($role == "student"){
            for ($i=0;$i<sizeof($del);$i++){
                $sql="DELETE FROM students WHERE StudentID='$del[$i]'";
                $query=mysqli_query($conn,$sql);
            }
        }else if ($role == "teacher"){
            for ($i=0;$i<sizeof($del);$i++){
                $sql="DELETE FROM teachers WHERE TeacherID='$del[$i]'";
                $query=mysqli_query($conn,$sql);
            }
        }else if ($role == "classteacher"){
            for ($i=0;$i<sizeof($del);$i++){
                $sql="DELETE FROM classteachers WHERE ClassTeacherID='$del[$i]'";
                $query=mysqli_query($conn,$sql);
            }
        }
        echo <<<EOT
            <script type=text/javascript>
			 		window.location.href='index.php?method=deluser&role={$role}'; 
			</script>
EOT;
    }
?>