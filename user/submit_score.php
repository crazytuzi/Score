<?php
    $length=$_GET['length'];
    $TeachingID=$_GET['TeachingID'];
    require_once('../config/mysqlconfig.php');
    for ($i=0;$i<$length;$i++){
        $StudentID=$_GET[(string)($i*3)];
        $State=$_GET[(string)($i*3+1)];
        $Score=$_GET[(string)($i*3+2)];
        updata_score($StudentID,$TeachingID,$State,$Score);
    }
    $url="teacher.php?method=seescore&TeachingID=$TeachingID";
    Header("Location: $url");
    function updata_score($stu_id,$teaching_id,$state,$score){
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $sql="UPDATE scores SET State='$state' , Score='$score' WHERE StudentID='$stu_id' AND TeachingID='$teaching_id'";
            $query=mysqli_query($conn,$sql);
            return true;
        }
?>