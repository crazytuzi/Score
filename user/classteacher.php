<!-- <a href="?method=seeinfo">查看信息</a>
</br>
<a href="?method=modinfo">修改信息</a>
</br>
<a href="?method=seestuscore">查看学生成绩</a>
</br>
<a href="?method=seecoursescore">查看各科成绩</a>
</br>
<a href="?method=modpassword">修改密码</a>
</br> -->
<?php
    session_start();
    $ctea_id=$_SESSION['classteacherid'];
    $method=@$_GET['method'];
    require_once('../config/mysqlconfig.php');
    switch ($method){
        case "seeinfo":ctea_seeinfo($ctea_id);break;
        case "modinfo":ctea_modinfo($ctea_id);break;
        case "seestuinfo":ctea_seestuinfo($ctea_id);break;
        case "seestuscore":
            {
                $stu_id=@$_GET['StudentID'];
                switch ($stu_id){
                    case '':ctea_stuscore_see($ctea_id);break;
                    default:
                        ctea_seestuscore($stu_id);
                }
            };break;
        case "seecoursescore":
            {
                $teaching_id=@$_GET['TeachingID'];
                switch ($teaching_id){
                    case '':ctea_coursescore_see($ctea_id);break;
                    default:
                        ctea_seecoursescore($ctea_id,$teaching_id);
                }
            };break;
            case "modpassword":{
            modepassword();
        }
        // case "modpassword":header('Location:modpassword.php');break;
    }
    function ctea_seestuinfo($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students WHERE ClassID in (SELECT ClassID FROM classes WHERE ClassTeacherID='$ctea_id')";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        #var_dump($res);
        echo <<<EOT
        <div id="informent" class="listscroll">
            <table border="1" class="tablelist">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>身份证号码</th>
                    <th>电话号码</th>
                </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $student=$res[$i];
            $Sex=$student['Sex']==0?"男":"女";
            echo <<<EOT
                <tr>
                <td>{$student['StudentID']}</td>
                <td>{$student['Name']}</td>
                <td>{$Sex}</td>
                <td>{$student['Age']}</td>
                <td>{$student['IDCardNo']}</td>
                <td>{$student['PhoneNum']}</td>
            </tr>
EOT;
        }
        echo <<<EOT
            </table></div>
EOT;
    }
    function ctea_modinfo($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$ctea_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Name=$res['0']['Name'];
        $Sex=$res['0']['Sex'];
        $Sex_str=$Sex==0?"男":"女";
        $Age=$res['0']['Age'];
        $PhoneNum=$res['0']['PhoneNum'];
        $PhoneNum_str=$PhoneNum==''?"未填写":$PhoneNum;
        echo <<<EOT
        <div id="infor" class="main-entry" style="z-index:300;">
        <form action="" method="post" >
                    <span class="title">
                    <i class="developer"></i>工号:{$ctea_id}</span>
                    <span class="title">
                    <i class="developer"></i>姓名:{$Name}</span>
                    <span class="title">
                    <i class="developer"></i>性别:{$Sex_str}</span>
                    <span class="title">
                    <i class="developer"></i>年龄:{$Age}</span>
                    <span class="title">
                    <i class="developer">电话号码:<input value="{$PhoneNum_str}" name="phonenum"></span>
                    </br>
                    <input type="submit" value="提交" name="submit" id="btn2">
                    </form>
        </div>
EOT;
    if(isset($_POST['submit'])){
        $PhoneNum = $_POST['phonenum'];
        $isMatched = preg_match('/^0?(13|14|15|17|18)[0-9]{9}$/', $PhoneNum, $matches);
        if ($isMatched == 1) {
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $sql_courses="UPDATE teachers set PhoneNum='$PhoneNum' WHERE
            ClassTeacherID='$ctea_id'";
            $query=mysqli_query($conn,$sql_courses);
            echo <<<EOT
                <script type="application/javascript">
                    alert("修改成功");
                    window.location.href='?method=seeinfo';
                </script>
EOT;
        }else{
            echo <<<EOT
            <script type="application/javascript">
                    alert("电话号码格式错误,请重新输入");
                    window.location.href='?method=seeinfo';
            </script>
                
EOT;
        }
    }
    }
    function ctea_seeinfo($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT Name FROM classes WHERE ClassTeacherID='$ctea_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $ClassName=$res[0]['Name'];
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$ctea_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Name=$res['0']['Name'];
        $Sex=$res['0']['Sex'];
        $Sex_str=$Sex==0?"男":"女";
        $Age=$res['0']['Age'];
        $PhoneNum=$res['0']['PhoneNum'];
        $PhoneNum_str=$PhoneNum==''?"未填写":$PhoneNum;
        echo <<<EOT
        <div id="infor" class="main-entry">
                    <span class="title">
                    <i class="developer"></i>工号:{$ctea_id}</span>
                    <span class="title">
                    <i class="developer"></i>姓名:{$Name}</span>
                    <span class="title">
                    <i class="developer"></i>性别:{$Sex_str}</span>
                    <span class="title">
                    <i class="developer"></i>年龄:{$Age}</span>
                    <span class="title">
                    <i class="developer">电话号码:{$PhoneNum_str}</span>
                    <span class="title">
                    <i class="developer">班级:{$ClassName}</span>
        </div>
EOT;
    }
            /*<div id="infor">
            <p>姓名:{$Name}</p>
            <p>性别:{$Sex_str}</p>
            <p>年龄:{$Age}</p>
            <p>电话号码:{$PhoneNum_str}</p>
            </div>*/
    function ctea_stuscore_see($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT StudentID,Name FROM students WHERE ClassID IN (SELECT ClassID FROM classes WHERE ClassTeacherID='$ctea_id');";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
               <div id="infor" class="main-entry" style="z-index:400">          
EOT;
        for ($j=0;$j<sizeof($res);$j++){
            $StudentID=$res[$j]['StudentID'];
            $StuName=$res[$j]['Name'];
            echo <<<EOT
            
            <a href="?method=seestuscore&StudentID={$StudentID}"><span class="title">
                    <i class="developer"></i>{$StudentID}<i> </i>{$StuName}</span></a>  
EOT;
        }

        echo <<<EOT
               </div>          
EOT;
    }
    function ctea_seestuscore($stu_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql = "SELECT * FROM scores WHERE StudentID='$stu_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div id="informent" class="listscroll">
            <table class="tablelist">
            <tr>
                <th>课程名</th>
                <th>状态</th>
                <th>成绩</th>
            </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $score=$res[$i];
            $State=$res[$i]['State'];
            $State_str='';
            if ($State == 0){
                $State_str="暂无";
            }else if ($State == 1){
                $State_str="正考";
            }else if ($State == 2){
                $State_str="补考";
            }
            $Score=$res[$i]['Score'];
            $Score_str= $Score==''?"无":$Score;
            $TeachingID=$res[$i]['TeachingID'];
            $CourseID=get_courseID($conn,$TeachingID);
            $CourseName=get_coursename($conn,$CourseID);
            echo <<<EOT
            <tr>
                <td>$CourseName</td>
                <td>$State_str</td>
                <td>$Score_str</td>
            </tr>
EOT;
        }
        echo <<<EOT
            </table></div>
EOT;
    }
    /*
     * 查询班主任管理学生的所选的科目
     * 1.班主任管理的班级
     * 2.班级所属的学生
     * 3.学生所选的课程
     * 4.课程的科目
     */
    function ctea_coursescore_see($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        /*
        $sql="SELECT CourseID,Name FROM courses WHERE CourseID in
              (SELECT CourseID FROM teaching WHERE TeachingID in 
              (SELECT TeachingID FROM scores WHERE StudentID in 
              (SELECT StudentID FROM students WHERE ClassID IN 
              (SELECT ClassID FROM classes WHERE ClassTeacherID='$ctea_id'))))";
        */
        $sql="SELECT CourseID,TeachingID,ClassTime FROM teaching WHERE TeachingID in 
              (SELECT TeachingID FROM scores WHERE StudentID in 
              (SELECT StudentID FROM students WHERE ClassID IN 
              (SELECT ClassID FROM classes WHERE ClassTeacherID='$ctea_id')))";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div id="infor" class="main-entry" style="z-index:400">
EOT;
        for ($j=0;$j<sizeof($res);$j++){
            $CourseID=$res[$j]['CourseID'];
            $CourseName=get_coursename($conn,$CourseID);
            $TeachingID=$res[$j]['TeachingID'];
            $ClassTime=$res[$j]['ClassTime'];
            echo <<<EOT
                <a href="?method=seecoursescore&TeachingID={$TeachingID}"><span class="title">
                    <i class="developer"></i>{$CourseName}<i> </i>{$ClassTime}</span></a>
EOT;
        }
        echo <<<EOT
               </div>          
EOT;
    }
    function get_courseID($conn,$TeachingID){
        $sql="SELECT CourseID FROM teaching WHERE TeachingID='$TeachingID'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res[0]['CourseID'];
    }
    function get_coursename($conn,$CourseID){
        $sql="SELECT Name FROM courses WHERE CourseID='$CourseID'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res[0]['Name'];
    }
    function ctea_seecoursescore($ctea_id,$teaching_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql = "SELECT StudentID,State,Score FROM scores
                WHERE TeachingID='$teaching_id' AND
                StudentID in 
                (SELECT StudentID FROM students WHERE ClassID in 
                (SELECT ClassID FROM classes WHERE ClassTeacherID='$ctea_id'))";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div id="informent" class="listscroll">
            <table class="tablelist">
            <tr>
                <th>姓名</th>
                <th>状态</th>
                <th>成绩</th>
            </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $StudentID=$res[$i]['StudentID'];
            $StuName=get_stuname($StudentID);
            $State=$res[$i]['State'];
            $State_str='';
            if ($State == 0){
                $State_str="暂无";
            }else if ($State == 1){
                $State_str="正考";
            }else if ($State == 2){
                $State_str="补考";
            }
            $Score=$res[$i]['Score'];
            $Score_str= $Score==''?"无":$Score;
            echo <<<EOT
                <tr>
                    <td>$StuName</td>
                    <td>$State_str</td>
                    <td>$Score_str</td>
                </tr>
EOT;
        }
        echo <<<EOT
                </table></div>
EOT;
    }
    function get_stuname($stu_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT Name FROM students WHERE StudentID='$stu_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res[0]['Name'];
    }
    function check_oldpassword($ctea_id,$oldpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $oldpassword_md5=md5($oldpassword);
        $sql="SELECT * FROM classteachers WHERE ClassTeacherID='$ctea_id' AND Password='$oldpassword_md5'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        mysqli_close($conn);
        if (sizeof($res)>0){
            return true;
        }else {
            return false;
        }
    }
    function modpassword($ctea_id,$newpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $newpassword_md5=md5($newpassword);
        $sql="UPDATE classteachers SET password='$newpassword_md5' WHERE ClassTeacherID='$ctea_id'";
        $query=mysqli_query($conn,$sql);
        //这里怎么判断UPDATE是否成功
        return true;
    }
    function modepassword(){
        echo <<<EOT
                    <form method="post" action="" class="modps">
                        旧的密码:<input type="password" name="oldpassword">
                        </br>
                        新的密码:<input type="password" name="newpassword">
                        </br>
                        <input type="submit" name="submit" value="确认" id="btn2">
                    </form>
EOT;
        //session_start();
        $ctea_id=$_SESSION['classteacherid'];
        if (isset($_POST['submit'])) {
            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['newpassword'];
            if (check_oldpassword($ctea_id, $oldpassword) == true) {
                if (modpassword($ctea_id, $newpassword) == true) {
                    echo <<<EOT
                                <div id="returnshow">
                                    <p>修改成功</p>
                                </div>
EOT;
                } else {
                    echo <<<EOT
                                <div id="returnshow">
                                    <p>修改失败</p>
                                </div>
EOT;
                }
            } else {
                echo <<<EOT
                                 <div id="returnshow">
                                    <p>旧的密码错误</p>
                                </div>
EOT;
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>班主任主页</title>
    <script type="text/javascript">
        
    </script>
    <style type="text/css">
     .imglink{
        margin: 10px;
        height: 109px;
        width: 100px;
        /*float: left;*/
        margin-top: -10px;
        padding: 0px;
    }
    #local{
        position: absolute;
        z-index: 200;
        top: 200px;
        left: 400px;
    }
    #loc{
        z-index: 200;
        top: 200px;
        left: 400px;
    }
    .pic img{
        width:70px;
        height:70px;
        padding-left: 19px ! important;
        padding-top: 0px;
    }

    .urlname{
        font-size: 14px;
        font-weight: normal;
        color: #515151;
        margin: 0px;
        width: 130px;
        text-align: center;
    }
    .options-left {
        position:left;
        margin: 0 0px 0px 0px;
    }
    #infor{
        position: absolute;
        left: 550px;
        top: 140px;
    }
    #infors{
        position: absolute;
        left: 650px;
        top: 200px;
    }
    #informent{
        position: absolute;
        left: 390px;
        top: 190px;
        z-index: 300;
    }
    #container{
        margin-left: 70px; 
    }
    #black{
           border-left: solid gray;
           border-right: solid gray; 
           border-bottom: solid gray; 
           height: 700px;
           width: 750px;
           position: absolute;
           left: 350px;
           top: 38px;
           /*background:#b5cfd2 url("../images/5-1206010T003.gif");*/
        }
    #blueBar { 
        background-color: green;
        opacity: 0.85; 
        width: 100%;
        height: 30px; 
        margin: 0 auto; 
    }
     #blueBar a { 
        text-decoration:none;
        color:#FFFFFF;
        font-size: 18px;
        font-family: arial;
        /*color: rgb(255,255,255);*/
    }
    #informent tr{
        height: 30px;
    } /* 
     #infor{
        position: absolute;
        left: 550px;
        top: 140px;
    } */
    #prom{
        width: 120px;
        height: 30px;
    }
    #term{
        width: 120px;
        height: 30px;
    } 
    #sub{
        height: 30px;
    } 
    a:hover{
        text-decoration: none;
    } 
    a:link{
        text-decoration: none;
    }
    #lefthalf{
        position: relative;
        float: right;
    }
    #righthalf{
        position: absolute;
        left: 210px;
        top: 190px;
    }
    #image{
        position: relative;
        left: 60px;
    }
    .listscroll {
            /*display: none;*/
            overflow-x: auto;
            overflow-y: auto;
            height: 500px;
            /*width: 90%;*/
        }
        .tablelist{
            border-collapse:collapse;
            width: 700px;
        }
        .tablelist th{
            background:#b5cfd2 url('../images/1347078600_3763.jpg');
             border-width: 1px;
             padding: 8px;
             border-style: solid;
             border-color: #999999;
             /*position:fixed;*/

        }
        .tablelist  td{
            background:#dcddc0 url('../images/1347078645_1925.jpg');
             border-width: 1px;
             padding: 8px;
             /*opacity: 0.5;*/
             border-style: solid;
             border-color: #999999;
        }
        .main-entry {

            width: 550px;
            height: 550px;
            overflow-y: scroll;
            display: table-footer-group;
            margin: 15px auto 0;
        }

        .main-entry span {
            background: rgba(13, 155, 219,1);
            display: block;
            text-decoration: none;
           /* float: left;*/
            text-align: center;
            cursor: pointer;  
            border-radius: 8px;
            font-size: 14px;
            letter-spacing: 1px;
            height: 50px;
            width: 350px;
            color: #ffffff;
            line-height: 50px;
            position: relative;
            overflow: hidden;
            margin-top:10px;
        }
        /* .main-entry a.title {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            padding-left: 18px;
        } */
        .main-entry span .title i {
            position: absolute;
            left: 0px;
            top: 14px;
            /*background: url(https://img.alicdn.com/tps/TB1uh30IpXXXXXKXVXXXXXXXXXX.png) no-repeat 0 0;*/
            display: block;
            width: 24px;
            height: 24px;
            background-size: 24px;
        }
        #infor{
            position: absolute;
            left: 550px;
            top: 100px;
        }
        #btn2{
            float:right;
            /*margin-left: 90px;*/
            box-sizing: border-box;
          text-align:center;
          padding-top: 100px;
          /*font-size:1.4em;*/
          border-radius:4px;
          border:1px solid #c8cccf;
          /*color:#6a6f77;*/
          -web-kit-appearance:none;
          -moz-appearance: none;
          display:block;
            background:#b5cfd2 url('../images/1347078600_3763.jpg');
          outline:0;
          padding:0 1em;
          text-decoration:none;
          height: 30px;
          width:60px;
        }
        i{
            font-style: normal;
        }
        #infor input[type="text"]:focus{
          border:1px solid #ff7496;
           background:#b5cfd2 url('../images/1347078645_1925.jpg');
        }
        #infor input[type="text"],input[type="password"]{
          box-sizing: border-box;
          text-align:center;
          font-size:1.4em;
          height:2.7em;
          border-radius:4px;
          border:1px solid #c8cccf;
          color:#6a6f77;
          -web-kit-appearance:none;
          -moz-appearance: none;
          display:block;
          outline:0;
          padding:0 1em;
          text-decoration:none;
           background:#b5cfd2 url('../images/1347078600_3763.jpg');
          width:100%;
        }
        input[type="password"]:focus{
          border:1px solid #ff7496;
           background:#b5cfd2 url('../images/1347078645_1925.jpg');
        }
        .modps{
            position: absolute;
            left: 550px;
            top: 200px;
            z-index: 400;
        }
        #returnshow{
            position: absolute;
            left: 650px;
            top: 270px;
        }
    </style>
</head>
<body background="../images/5-1206010T015-50.gif">
    <div id="blueBar"  >
            <a  style="margin-left:50px" href="">首页</a>
            <a  style="margin-left:1060px" href="">注销</a>
        </div>
    <div  id="container">
        <!-- <div id="blueBar"  >
            <a class="header" style="float: left" href="">首页</a>
            <a class="header" style="float: right" href="">退出登录</a>
        </div> -->
        <div id="content">
            <table>
                <tr>
                    <td width="20%" id="con1">
                        <div>
                            <table id="options-left" class="table">
                                <tr>
                                     <div style="margin:5px 10px 5px" id="image">
                                     <img onError="this.src='../images/defaultFace.jpg'" src="attachmentDownload.portal?notUseCache=true&attachmentId=defaultValue" alt="" width="130px" heigth="100px;">
                                </tr>
                                <div id="lefthalf">
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=seeinfo"  title="查看信息">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=seeinfo" title="查看信息" style="top: -10px">查看信息</a>
                                        </h3>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=modinfo"  title="修改信息">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=modinfo" title="修改信息">修改信息</a>
                                        </h3>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=seestuscore"  title="录入成绩">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=seestuscore" title="查看学生成绩">查看学生成绩</a>
                                        </h3>
                                    </div>
                                </tr>
                            </div><div id="righthalf">
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=modpassword"  title="修改密码">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=modpassword" title="修改密码">修改密码</a>
                                        </h3>
                                    </div>
                                </tr>
                                 <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=seecoursescore"  title="查看各科成绩">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=seecoursescore" title="查看各科成绩">查看各科成绩</a>
                                        </h3>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=seestuinfo"  title="查看学生信息">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=seestuinfo" title="查看学生信息">查看学生信息</a>
                                        </h3>
                                    </div>
                                </tr>
                            </div>
                            </table>
                        </div>
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
    <div id="black">
        
    </div>


</body>
</html>