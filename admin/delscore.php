<?php
    require_once('../config/mysqlconfig.php');
    $del=@$_POST['del'];
    $TeachingID=$_POST['TeachingID'];
    if ($del == ""){
        echo <<<EOT
                <script type=text/javascript>
                        alert("没有选中");
                        window.location.href='index.php?method=delscore&teachingid={$TeachingID}'; 
                </script>
EOT;
    }else{
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        for ($i=0;$i<sizeof($del);$i++){
                $sql="UPDATE scores SET State=0, Score=null WHERE StudentID='$del[$i]' AND TeachingID='$TeachingID'";
                $query=mysqli_query($conn,$sql);
        }
        echo <<<EOT
                <script type=text/javascript>
                        window.location.href='index.php?method=delscore&teachingid={$TeachingID}'; 
                </script>
EOT;
    }
?>