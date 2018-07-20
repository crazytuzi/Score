<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password_md5=md5($password);
    require_once('../model/mysql.class.php');
    require_once('../config/mysqlconfig.php');
    $db=new mysql();
    $link=$db->connect2();
    //学生
    $sql="SELECT * FROM students where StudentID='$username' and password='$password_md5'";
    $mysqli_num_rows=$db->getTotalRows($sql);
    if ($mysqli_num_rows>0){
        session_start();
        $_SESSION['studentid']=$username;
        echo <<<EOT
                <script type=text/javascript>
                        window.location.href='student.php'; 
                </script>
EOT;
    }
    //老师
    $sql="SELECT * FROM teachers where TeacherID='$username' and password='$password_md5'";
    $mysqli_num_rows=$db->getTotalRows($sql);
    if ($mysqli_num_rows>0){
        session_start();
        $_SESSION['teacherid']=$username;
        echo <<<EOT
                    <script type=text/javascript>
                            window.location.href='teacher.php'; 
                    </script>
EOT;
    }
    //班主任
    $sql="SELECT * FROM classteachers where ClassTeacherID='$username' and password='$password_md5'";
    $mysqli_num_rows=$db->getTotalRows($sql);
    if ($mysqli_num_rows>0){
        session_start();
        $_SESSION['classteacherid']=$username;
        echo <<<EOT
                        <script type=text/javascript>
                                window.location.href='classteacher.php'; 
                        </script>
EOT;
    }
    $db->close($link);
    echo <<<EOT
                    <script type=text/javascript>
                            alert("登陆失败");
                            window.location.href='login.php'; 
                    </script>
EOT;
?>