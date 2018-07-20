<?php
    require_once('../config/mysqlconfig.php');
    $TeachingID=$_POST['TeachingID'];
    $StudentID=$_POST['StudentID'];
    $State=$_POST['State'];
    $Score=$_POST['Score'];
    for ($i=0;$i<sizeof($StudentID);$i++){
        updata_score($StudentID[$i],$TeachingID,$State[$i],$Score[$i]);
    }
    $url="index.php?method=seescore&teachingid=$TeachingID";
    Header("Location: $url");
    function updata_score($stu_id,$teaching_id,$state,$score){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="UPDATE scores SET State='$state' , Score='$score' WHERE StudentID='$stu_id' AND TeachingID='$teaching_id'";
        $query=mysqli_query($conn,$sql);
        return true;
    }
?>