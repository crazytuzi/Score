<?php
    session_start();
    $stu_id=$_SESSION['studentid'];
    require_once('../config/mysqlconfig.php');
    $method=@$_GET['method'];
    $prom=@$_GET['prom'];
    $term=@$_GET['term'];
    switch ($method){
        case "seeinfo":stu_seeinfo($stu_id);break;
        case "modinfo":stu_modinfo($stu_id);break;
        case "seescore":
            {
                stu_seescore($stu_id,$prom,$term);
                $prom='';
                $term='';
            };break;
        case "modpassword":modepassword();break;
    }
    if ($prom !='' && $term != '') {
        stu_seescore($stu_id,$prom,$term);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>学生主页</title>
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
    }
    #container{
        margin-left: 120px; 
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
    } 
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
    #infors p{
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
          width:200px;
    }
    .main-entry {
            width: 550px;
            height: 50px;
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
        .subtn{
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
        #top{
            position: absolute;
            z-index: 300;
            display: inline;
        }
        .modps{
            position: absolute;
            left: 550px;
            top: 200px;
            z-index: 1;
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
     #returnshow{
         position: absolute;
         left: 650px;
         top: 270px;
     }
    </style>
</head>
<body background="../images/5-1206010T015-50.gif">
        <div id="blueBar"  >
            <a class="header" style="margin-left:50px" href="">首页</a>
            <a class="header" style="margin-left:1060px" href="">注销</a>
        </div>
    <div  id="container">
        <div id="content">
            <table>
                <tr>
                    <td width="20%" id="con1">
                        <div>
                            <table id="options-left" class="table">
                                <tr>
                                     <div style="margin:5px 10px 5px">
                                     <img onError="this.src='../images/defaultFace.jpg'" src="attachmentDownload.portal?notUseCache=true&attachmentId=defaultValue" alt="" width="130px" heigth="100px;">
                                </tr>
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
                                            <a class="pic" href="?method=seescore&prom=0&term=0"  title="查看成绩">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=seescore&prom=0&term=0" title="查看成绩">查看成绩</a>
                                        </h3>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <table class="imglink"><tr><td>
                                            <a class="pic" href="?method=modpassword"  title="修改密码">
                                            <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                        </td></tr></table>
                                        <h3 class="urlname" style="position: relative;top: -20px">
                                            <a href="?method=modpassword" title="修改密码" style="text-decoration : none">修改密码</a>
                                        </h3>
                                    </div>
                                </tr>
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

<!-- <a href="?method=seeinfo">查看信息</a>
</br>
<a href="?method=modinfo">修改信息</a>
</br>
<a href="?method=seescore&prom=0&term=0">查看成绩</a>
</br>
<a href="?method=modpassword">修改密码</a>
</br> -->

<?php

    function stu_seeinfo($stu_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students WHERE StudentID='$stu_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Name=$res['0']['Name'];
        $Sex=$res['0']['Sex'];
        $Sex_str=$Sex==0?"男":"女";
        $Age=$res['0']['Age'];
        $IDCardNo=$res['0']['IDCardNo'];
        $PhoneNum=$res['0']['PhoneNum'];
        $PhoneNum_str=$PhoneNum==''?"未填写":$PhoneNum;
        $ClassID=$res['0']['ClassID'];
        $ClassName=get_classname($conn,$ClassID);
        echo <<<EOT
        <div id="infor" class="main-entry">
                    <span class="title">
                    <i class="developer"></i>姓名:{$Name}</span>
                    <span class="title">
                    <i class="developer"></i>性别:{$Sex_str}</span>
                    <span class="title">
                    <i class="developer"></i>年龄:{$Age}</span>
                    <span class="title">
                    <i class="developer"></i>班级:{$ClassName}</span>
                    <span class="title">
                    <i class="developer"></i>身份证号码:{$IDCardNo}</span>
                    <span class="title">
                    <i class="developer"></i>电话号码:{$PhoneNum_str}</span>
        </div>
            
EOT;
    }
    /*<div id="infors">
            <p>姓名:{$Name}</p>
            <p>性别:{$Sex_str}</p>
            <p>年龄:{$Age}</p>
            <p>班级:{$ClassName}</p>
            <p>身份证号码:{$IDCardNo}</p>
            <p>电话号码:{$PhoneNum_str}</p>
            </div>*/
 function get_classname($conn,$ClassID){
        $sql="SELECT Name FROM classes WHERE ClassID='$ClassID'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res[0]['Name'];
    }
    function stu_modinfo($stu_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students WHERE StudentID='$stu_id'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Name=$res['0']['Name'];
        $Sex=$res['0']['Sex'];
        $Sex_str= $Sex==0?"男":"女";
        $Age=$res['0']['Age'];
        $IDCardNo=$res['0']['IDCardNo'];
        $PhoneNum=$res['0']['PhoneNum'];
        $PhoneNum_str=$PhoneNum==''?"未填写":$PhoneNum;
        $ClassID=$res['0']['ClassID'];
        $ClassName=get_classname($conn,$ClassID);
        echo <<<EOT
        <div id="infor" class="main-entry">
        <form action="" method="post" id="top">
                    <span class="title">
                    <i class="developer"></i>姓名:{$Name}</span>
                    <span class="title">
                    <i class="developer"></i>性别:{$Sex_str}</span>
                    <span class="title">
                    <i class="developer"></i>年龄:{$Age}</span>
                    <span class="title">
                    <i class="developer"></i>班级:{$ClassName}</span>
                    <span class="title">
                    <i class="developer"></i>身份证号码:{$IDCardNo}</span>
                    <span class="title">
                    <i class="developer"></i>电话号码:<input value="{$PhoneNum_str}" name="phonenum"></span>
                </br>
                <input type="submit" value="提交" name="submit" id="btn2">
                </form>
            </div>
EOT;
    }
    /*
            <form>
                <p>姓名:{$Name}</p>
                <p>性别:{$Sex_str}</p>
                <p>年龄:{$Age}</p>
                <p>班级:{$ClassName}</p>
                <p>身份证号码:{$IDCardNo}</p>
                <p>电话号码:<input value="{$PhoneNum_str}" name="phonenum"></p>

            </form>*/
    function stu_seescore($stu_id,$prom,$term){
        echo <<<EOT
        <div id="infor sty" style="display:inline;position: absolute;left: 550px;top: 100px;z-index:300;">
            <form method="get" action="student.php">
                <select name="prom" id="prom">
                    <option value="0">所有</option>
                    <option value="1">大一</option>
                    <option value="2">大二</option>
                    <option value="3">大三</option>
                    <option value="4">大四</option>
                </select>
                <select name="term" id="term">
                    <option value="0">学年</option>
                    <option value="1">上期</option>
                    <option value="2">下期</option>
                </select>
                <input type="submit" value="submit" id="sub" class="subtn">
            </form>
            </div>
            <script type="application/javascript">
                var select_prom=document.getElementById("prom");
                for (var i=0;i<=select_prom.length;i++){
                    if(parseInt(select_prom.options[i].value)==parseInt({$prom})){
                        select_prom.options[i].selected=true;
                        break;
                    }
                } 
                var select_term=document.getElementById("term");
                for (var i=0;i<=select_term.length;i++){
                    if(parseInt(select_term.options[i].value)==parseInt({$term})){
                        select_term.options[i].selected=true;
                        break;
                    }
                } 
            </script>
EOT;
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql_courses="SELECT * FROM courses";
        $query=mysqli_query($conn,$sql_courses);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        #var_dump($res);

        $courses=[];
        for ($i=0;$i<sizeof($res);$i++){
            $course=[];
            $course['CourseNature']=$res[$i]['CourseNature']=='0'?"必修":"选修";
            #$course['Term']=$res[$i]['Term'];
            switch ($res[$i]['Term']){
                case '1':$course['Term']="大一上";break;
                case '2':$course['Term']="大一下";break;
                case '3':$course['Term']="大二上";break;
                case '4':$course['Term']="大二下";break;
                case '5':$course['Term']="大三上";break;
                case '6':$course['Term']="大三下";break;
                case '7':$course['Term']="大四上";break;
            }
            $course['Credit']=$res[$i]['Credit'];
            $courses[$res[$i]['CourseID']]=$course;
        }
        #var_dump($courses);

        if ($prom == 0) {
            $sql = "SELECT * FROM scores WHERE StudentID='$stu_id'";
        }else{
            if ($term == 0){
                $start_term=($prom-1)*2+1;
                $end_term=($prom-1)*2+2;
            }else if ($term == 1){
                $start_term=($prom-1)*2+1;
                $end_term=0;
            }else{
                $start_term=0;
                $end_term=($prom-1)*2+2;
            }
            $sql = "SELECT * FROM scores WHERE StudentID='$stu_id' AND TeachingID in(SELECT TeachingID FROM teaching WHERE CourseID IN
(SELECT CourseID FROM courses WHERE Term='$start_term' or Term='$end_term'))";
        }
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT

        <div id="informent" class="listscroll">
            <table border="1" class="tablelist">
            <tr>
                <th>课程名</th>
                 <th>课程号</th>
                 <th>开课学期</th>
                <th>学分</th>
                <th>课程性质</th>
                <th>状态</th>
                <th>成绩</th>
                <th>绩点</th>
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
            $GPA=$Score==''?"":($Score/10-5)*$courses[$CourseID]["Credit"];
            echo <<<EOT
            <tr>
                <td>$CourseName</td>
                <td>$CourseID</td>
                <td>{$courses[$CourseID]["Term"]}</td>
                <td>{$courses[$CourseID]["Credit"]}</td>
                <td>{$courses[$CourseID]["CourseNature"]}</td>
                <td>$State_str</td>
                <td>$Score_str</td>
                <td>$GPA</td>
            </tr>
EOT;
        }
        echo <<<EOT
            </table></div>
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
    function check_oldpassword($stu_id,$oldpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $oldpassword_md5=md5($oldpassword);
        $sql="SELECT * FROM students WHERE StudentID='$stu_id' AND Password='$oldpassword_md5'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        mysqli_close($conn);
        if (sizeof($res)>0){
            return true;
        }else {
            return false;
        }
    }
    function modpassword($stu_id,$newpassword){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $newpassword_md5=md5($newpassword);
        $sql="UPDATE students SET password='$newpassword_md5' WHERE StudentID='$stu_id'";
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
        $stu_id=$_SESSION['studentid'];
        if (isset($_POST['submit'])) {
            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['newpassword'];
            if (check_oldpassword($stu_id, $oldpassword) == true) {
                if (modpassword($stu_id, $newpassword) == true) {
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