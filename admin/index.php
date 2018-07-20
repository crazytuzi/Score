
<?php
    session_start();
    require_once('../config/mysqlconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>管理员主页</title>
    <script type="text/javascript">
        
    </script>
    <style type="text/css">
        .imglink{
            margin: 10px;
            height: 109px;
            width: 100px;
            /*float: left;*/
            margin-top: 0px;
            padding: 0px;
        }
        #imgl{
            margin-left:-100px;
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
        #infors{
            position: absolute;
            left: 628px;
            top: 222px;
        }
        #infor{
            position: absolute;
            left: 550px;
            top: 100px;
        }
        #informent{
            position: absolute;
            left: 367px;
            top: 55px;
        }
        #container{
            margin-left: 50px; 
        }
        #black{
           border-left: solid gray;
           border-right: solid gray; 
           border-bottom: solid gray; 
           height: 700px;
           width: 750px;
           position: absolute;
           left: 350px;
           top: 0px;
           /*background:#b5cfd2 url("../images/5-1206010T003.gif");*/
        }
        #blueBar { 
            background-color: green;
            opacity: 0.85; 
            width: 100%;
            height: 30px; 
            top:-10px;
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
        .show{
            position: absolute;
            left: 650px;
            top: 200px; 
        }
        #returnshow{
            position: absolute;
            left: 650px;
            top: 270px;
        }
        .mid {
            width: 100%;
        }

        .main-entry {
            width: 550px;
            height: 50px;
            display: table-footer-group;
            margin: 15px auto 0;
        }

        .main-entry a {
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
            width: 170px;
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
        .main-entry a .title i {
            position: absolute;
            left: 20px;
            top: 14px;
            background: url(https://img.alicdn.com/tps/TB1uh30IpXXXXXKXVXXXXXXXXXX.png) no-repeat 0 0;
            display: block;
            width: 24px;
            height: 24px;
            background-size: 24px;
        }
        /* .student a{
            position: absolute;
            float: left;
            margin-top:100px; 
        } */
        .developer{

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
        .input_control{
          width:360px;
          margin:20px auto;
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
        #btn1{
            margin-left: 90px;
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
            background:#b5cfd2 url('../images/1347078600_3763.jpg');
          outline:0;
          padding:0 1em;
          text-decoration:none;
          width:40%;
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
        #infor input[type="text"]:focus{
          border:1px solid #ff7496;
           background:#b5cfd2 url('../images/1347078645_1925.jpg');
        }
        input[type="password"]:focus{
          border:1px solid #ff7496;
           background:#b5cfd2 url('../images/1347078645_1925.jpg');
        }
        ::-moz-placeholder { /* Mozilla Firefox 4 to 18 */
          color: #6a6f77;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
          color: #6a6f77;
        }
        input::-webkit-input-placeholder{
          color: #6a6f77;
        }
        .modps{
            position: absolute;
            left: 550px;
            top: 200px;
        }
    </style>

</head>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<!-- <a href="?method=adduser">添加用户</a>
</br>
<a href="?method=moduser">修改用户</a>
</br>
<a href="?method=seeuser">查看用户</a>
</br>
<a href="?method=deluser">删除用户</a>
</br>
<a href="?method=addscore">添加成绩</a>
</br>
<a href="?method=checkscore">修改成绩</a>
</br>
<a href="?method=delscore">删除成绩</a>
</br>
<a href="?method=seescore">查看成绩</a>
</br>
<a href="modpassword.php">修改密码</a>
</br> -->
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
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=adduser"  title="添加用户">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=adduser" title="添加用户" style="top: -10px">添加用户</a>
                                            </h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=moduser"  title="修改用户">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=moduser" title="修改用户" style="top: -10px">修改用户</a>
                                            </h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                          <a class="pic" href="?method=seeuser" title="查看用户">
                                              <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                          </a>
                                          <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                              <a href="?method=seeuser" title="查看用户" style="top: -10px">查看用户</a>
                                          </h3>
                                      </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=deluser"  title="删除用户">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=deluser" title="删除用户" style="top: -10px">删除用户</a>
                                            </h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=addscore"  title="添加成绩">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=addscore" title="添加成绩" style="top: -10px">添加成绩</a>
                                            </h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=checkscore"  title="修改成绩">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=checkscore" title="修改成绩" style="top: -10px">修改成绩</a>
                                            </h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=delscore"  title="删除成绩">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=delscore" title="删除成绩" style="top: -10px">删除成绩</a>
                                            </h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=seescore"  title="查看成绩">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=seescore" title="查看成绩" style="top: -10px">查看成绩</a>
                                            </h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <a class="pic" href="?method=modpassword"  title="修改密码">
                                                <img class="img" src='http://my.swust.edu.cn/attachmentDownload.portal?notUseCache=true&type=linkUrlAttachment&ownerId=21' alt='本科教务链接图片' />
                                            </a>
                                            <h3 class="urlname" style="position: relative;top: 0px;left:-10px">
                                                <a href="?method=modpassword" title="修改密码" style="top: -10px">修改密码</a>
                                            </h3>
                                        </div>
                                    </td>
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

<?php
    $username=@$_SESSION['admin'];
    if($username == ''){
        echo "请先登陆";
    }
    $method=@$_GET['method'];
    switch ($method){
        case "adduser":{
            $role=@$_GET['role'];
            switch ($role){
                case "":adduser_role();break;
                default:
                    adduser($role);
            }
        }break;
        case "moduser":{
            $role=@$_GET['role'];
            switch ($role){
                case "":moduser_role();break;
                case "student":{
                    $stu_id=$_GET['studentid'];
                    modstudent($stu_id);
                }break;
                case "teacher":{
                    $tea_id=$_GET['teacherid'];
                    modteacher($tea_id);
                }break;
                case "classteacher":{
                    $ctea_id=$_GET['classteacherid'];
                    modclassteacher($ctea_id);
                }break;
            }
        }break;
        case "seeuser":{
            $role=@$_GET['role'];
            switch ($role){
                case "":seeuser_role();break;
                case "student":seeuser_student();break;
                default:
                    seeuser_teacherorclassteacher($role);break;
            }
        };break;
        case "deluser":{
            $role=@$_GET['role'];
            switch ($role){
                case "":deluser_role();break;
                case "student":deluser_student();break;
                case "teacher":deluser_teacher();break;
                case "classteacher":deluser_classteacher();break;
            }
        };break;
        case "addscore":{
            $TeachingID=@$_GET['teachingid'];
            switch ($TeachingID){
                case "":addscore_url();break;
                default:
                    addscore($TeachingID);
            }
        };break;
        case "seescore":{
            $TeachingID=@$_GET['teachingid'];
            switch ($TeachingID){
                case "":seescore_url();break;
                default:
                    seescore($TeachingID);
            }
        };break;
        case "checkscore":{
            $TeachingID=@$_GET['teachingid'];
            switch ($TeachingID){
                case "":checkscore_url();break;
                default:
                    checkscore($TeachingID);
            }
        };break;
        case "delscore":{
            $TeachingID=@$_GET['teachingid'];
            switch ($TeachingID){
                case "":delscore_url();break;
                default:
                    delscore($TeachingID);
            }
        };break;
        case "modpassword":{
            modepassword();
        }
    }
    function check_oldpassword($username,$oldpassword){
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $oldpassword_md5=md5($oldpassword);
            $sql="SELECT * FROM admin WHERE username='$username' AND password='$oldpassword_md5'";
            $query=mysqli_query($conn,$sql);
            $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
            mysqli_close($conn);
            if (sizeof($res)>0){
                return true;
            }else {
                return false;
            }
        }
        function modpassword($username,$newpassword){
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $newpassword_md5=md5($newpassword);
            $sql="UPDATE admin SET password='$newpassword_md5' WHERE username='$username'";
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
        $type=-1;
        if (isset($_SESSION['admin'])){
            $username=$_SESSION['admin'];
            if (isset($_POST['submit'])){
                $oldpassword=$_POST['oldpassword'];
                $newpassword=$_POST['newpassword'];
                if (check_oldpassword($username,$oldpassword) == true){
                    if (modpassword($username,$newpassword) == true){
                        echo <<<EOT
                        <div id="returnshow">
                            <p>修改成功</p>
                        </div>
EOT;

                    }else{
                        echo <<<EOT
                        <div id="returnshow">
                            <p>修改失败</p>
                        </div>
EOT;
                    }
                }else{
                    echo <<<EOT
                         <div id="returnshow">
                            <p>旧的密码错误</p>
                        </div>
EOT;
                    }
            }

        }else{
            //跳转到登陆页面
        }
        
    }

    function adduser_role(){
        echo <<<EOT
            <div id="infors" class="main-entry">
                    <a href="?method=adduser&role=classteacher" class="classtch"><span class="title">
                    <i class="developer"></i>班主任</span><s></s></a>
                    <a href="?method=adduser&role=teacher" class="teacher"><span class="title">
                    <i class="developer"></i>教师</span><s></s></a> 
                    <a href="?method=adduser&role=student" class="student"><span class="title">
                    <i class="developer"></i>学生</span><s></s></a> 
            </div>
EOT;
    }/*<a href="?method=adduser&role=student">学生</a>
                <a href="?method=adduser&role=teacher">老师</a>
                <a href="?method=adduser&role=classteacher">班主任</a>*/
    function adduser($role){
        echo <<<EOT
        
            <form action="adduser.php" method="post" id="infor" >
            <div class="listscroll">
            <input type="text" name="role" value="{$role}" style="display:none">
                编号:<input type="text" name="id" placeholder="Enter number here">
                姓名:<input type="text" name="username" placeholder="Enter name here">
                </br>
                密码:<input type="password" name="password" placeholder="Enter password here">
                </br>
                年龄:<input type="text" name="age" placeholder="Enter age here">
                </br>
                性别:<select name="sex">
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
                </br>
EOT;
/*
<form action="adduser.php" method="post">
            
        </form><div class="input_control">
                <input type="text" class="form_input" placeholder="编号:" name="id/>
            </div>
            <div class="input_control">
                <input type="text" class="form_input" placeholder="姓名:" name="username"/>
            </div>
            <div class="input_control">
                <input class="form_input" placeholder="密码:" type="password" name="password/>
            </div>
            <div class="input_control">
                <input type="text" name="age">
            </div>
            <div class="input_control">
                <select name="sex">
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
            </div>*/
        if ($role == "student"){
            echo <<<EOT
                身份证号码:<input type="text" name="IDCardNo" placeholder="ID">
                </br>
                班级:<select name="ClassID">
EOT;
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $sql="SELECT ClassID,Name FROM classes";
            $query=mysqli_query($conn,$sql);
            $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
            for ($i=0;$i<sizeof($res);$i++){
                echo <<<EOT
                    <option value="{$res[$i]['ClassID']}">{$res[$i]['Name']}</option>
EOT;
            }
            echo <<<EOT
                </select>
                </br>
EOT;
        }
        echo <<<EOT
        </div>
                <input type="submit" name="submit" id="btn1">
            </form>
EOT;
    }
    function moduser_role(){
        echo <<<EOT
        <div id="infors" class="main-entry">
                    <a href="?method=moduser&role=classteacher&classteacherid=-1" class="classtch"><span class="title">
                    <i class="developer"></i>班主任</span><s></s></a>
                    <a href="?method=moduser&role=teacher&teacherid=-1" class="teacher"><span class="title">
                    <i class="developer"></i>教师</span><s></s></a> 
                    <a href="?method=moduser&role=student&studentid=-1" class="student"><span class="title">
                    <i class="developer"></i>学生</span><s></s></a> 
        </div>
EOT;
    }
    /*<div id="infors">
                <a href="?method=moduser&role=student&studentid=-1">学生</a>
                <a href="?method=moduser&role=teacher&teacherid=-1">老师</a>
                <a href="?method=moduser&role=classteacher&classteacherid=-1">班主任</a>
        </div>*/
    function modstudent($stu_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $stu_id_first=$res[0]['StudentID'];
        $stu_id=$stu_id==-1?$stu_id_first:$stu_id;
        echo <<<EOT
            <form action="moduser.php" method="post" id="infor">
            <div class="listscroll">
                <input type="text" name="role" value="student" style="display:none">
                <input type="text" name="old_id" value="{$stu_id}" style="display:none">
                姓名:<select name="studentid" id="studentid" onchange="change()">
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            if ($res[$i]['StudentID'] == $stu_id){
                $index=$i;
                echo <<<EOT
                <option value="{$res[$i]['StudentID']}" selected="selected" onchange="change()">{$res[$i]['Name']}</option>
EOT;
            }else{
                echo <<<EOT
                <option value="{$res[$i]['StudentID']}">{$res[$i]['Name']}</option>
EOT;
            }
        }
        echo <<<EOT
                 </select>
                 </br>
                编号:<input type="text" name="new_id" value="{$res[$index]['StudentID']}">
                </br>
                密码:<input type="password" name="password" onFocus="this.type='text'" onBlur="this.type='password'" value="{$res[$index]['Password']}">
                </br>
                姓名:<input type="text" name="name" value="{$res[$index]['Name']}">
                </br>
                年龄:<input type="text" name="age" value="{$res[$index]['Age']}">
                </br>
                性别:<select name="sex">
EOT;
        if ($res[$index]['Sex'] == 0){
            echo <<<EOT
                <option value="0" selected="selected">男</option>
                <option value="1">女</option>
EOT;
        }else{
            echo <<<EOT
                <option value="0">男</option>
                <option value="1" selected="selected">女</option>
EOT;
        }
        echo <<<EOT
                </select>
                </br>
                身份证号码:<input type="text" name="IDCardNo" value="{$res[$index]['IDCardNo']}">
                </br>
                电话号码:<input type="text" name="PhoneNum" value="{$res[$index]['PhoneNum']}">
                </br>
                班级:<select name="ClassID">
                
EOT;
        $sql="SELECT ClassID,Name FROM classes";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        for ($i=0;$i<sizeof($res_class);$i++){
            if ($res_class[$i]['ClassID'] == $res[$index]['ClassID']){
                echo <<<EOT
                    <option value="{$res_class[$i]['ClassID']}" selected="selected">{$res_class[$i]['Name']}</option>
EOT;
            }else{
                echo <<<EOT
                    <option value="{$res_class[$i]['ClassID']}">{$res_class[$i]['Name']}</option>
EOT;
            }
        }
        echo <<<EOT
                    </select>
                    </div>
                </br>
                <input type="submit" name="submit" value="提交" id="btn1">
                </form>
EOT;
        echo <<<EOT
            <script language="JavaScript">
                function change() {
                    var select_id=document.getElementById("studentid");
                    var value=select_id.value;
                    window.location.href='?method=moduser&role=student&studentid='+value;
                }
            </script>
EOT;
    }

    function modteacher($tea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $tea_id_first=$res[0]['TeacherID'];
        $tea_id=$tea_id==-1?$tea_id_first:$tea_id;
        echo <<<EOT
            <form action="moduser.php" method="post" id="infor">
            <div class="listscroll">
                <input type="text" name="role" value="teacher" style="display:none">
                <input type="text" name="old_id" value="{$tea_id}" style="display:none">
                姓名:<select name="teacherid" id="teacherid" onchange="change()">
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            if ($res[$i]['TeacherID'] == $tea_id){
                $index=$i;
                echo <<<EOT
                <option value="{$res[$i]['TeacherID']}" selected="selected" onchange="change()">{$res[$i]['Name']}</option>
EOT;
            }else{
                echo <<<EOT
                <option value="{$res[$i]['TeacherID']}">{$res[$i]['Name']}</option>
EOT;
            }
        }
        echo <<<EOT
                 </select>
                  </br>
                编号:<input type="text" name="new_id" value="{$res[$index]['TeacherID']}">
                 </br>
                密码:<input type="password" name="password" onFocus="this.type='text'" onBlur="this.type='password'" value="{$res[$index]['Password']}">
                </br>
                姓名:<input type="text" name="name" value="{$res[$index]['Name']}">
                </br>
                年龄:<input type="text" name="age" value="{$res[$index]['Age']}">
                </br>
                电话号码:<input type="text" name="PhoneNum" value="{$res[$index]['PhoneNum']}">
                </br>
                性别:<select name="sex">
EOT;
        if ($res[$index]['Sex'] == 0){
            echo <<<EOT
                <option value="0" selected="selected">男</option>
                <option value="1">女</option>
EOT;
        }else{
            echo <<<EOT
                <option value="0">男</option>
                <option value="1" selected="selected">女</option>
EOT;
        }
        echo <<<EOT
                    </select>
                    </div>
                </br>
                <input type="submit" name="submit" value="提交" id="btn1">
                </form>
EOT;
        echo <<<EOT
            <script language="JavaScript">
                function change() {
                    var select_id=document.getElementById("teacherid");
                    var value=select_id.value;
                    window.location.href='?method=moduser&role=teacher&teacherid='+value;
                }
            </script>
EOT;
    }

    function modclassteacher($ctea_id){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM classteachers";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $ctea_id_first=$res[0]['ClassTeacherID'];
        $ctea_id=$ctea_id==-1?$ctea_id_first:$ctea_id;
        echo <<<EOT
                <form action="moduser.php" method="post" id="infor">
                <div class="listscroll">
                    <input type="text" name="role" value="classteacher" style="display:none">
                    <input type="text" name="old_id" value="{$ctea_id}" style="display:none">
                    姓名:<select name="classteacherid" id="classteacherid" onchange="change()">
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            if ($res[$i]['ClassTeacherID'] == $ctea_id){
                $index=$i;
                echo <<<EOT
                    <option value="{$res[$i]['ClassTeacherID']}" selected="selected" onchange="change()">{$res[$i]['Name']}</option>
EOT;
            }else{
                echo <<<EOT
                    <option value="{$res[$i]['ClassTeacherID']}">{$res[$i]['Name']}</option>
EOT;
            }
        }
        echo <<<EOT
                     </select>
                      </br>
                    编号:<input type="text" name="new_id" value="{$res[$index]['ClassTeacherID']}">
                     </br>
                    密码:<input type="password" name="password" onFocus="this.type='text'" onBlur="this.type='password'" value="{$res[$index]['Password']}">
                    </br>
                    姓名:<input type="text" name="name" value="{$res[$index]['Name']}">
                    </br>
                    年龄:<input type="text" name="age" value="{$res[$index]['Age']}">
                    </br>
                    电话号码:<input type="text" name="PhoneNum" value="{$res[$index]['PhoneNum']}">
                    </br>
                    性别:<select name="sex">
EOT;
        if ($res[$index]['Sex'] == 0){
            echo <<<EOT
                    <option value="0" selected="selected">男</option>
                    <option value="1">女</option>
EOT;
        }else{
            echo <<<EOT
                    <option value="0">男</option>
                    <option value="1" selected="selected">女</option>
EOT;
        }
        echo <<<EOT
                     </select>
                     </div>
                    </br>
                    <input type="submit" name="submit" value="提交"  id="btn1">
                    </form>
EOT;
        echo <<<EOT
                <script language="JavaScript">
                    function change() {
                        var select_id=document.getElementById("classteacherid");
                        var value=select_id.value;
                        window.location.href='?method=moduser&role=classteacher&classteacherid='+value;
                    }
                </script>
EOT;
    }
    function seeuser_role(){
        echo <<<EOT
        <div id="infors" class="main-entry">
                    <a href="?method=seeuser&role=classteacher" class="classtch"><span class="title">
                    <i class="developer"></i>班主任</span><s></s></a>
                    <a href="?method=seeuser&role=teacher" class="teacher"><span class="title">
                    <i class="developer"></i>教师</span><s></s></a> 
                    <a href="?method=seeuser&role=student" class="student"><span class="title">
                    <i class="developer"></i>学生</span><s></s></a> 
        </div>
EOT;
    }
        /*<div id="infors">
                <a href="?method=seeuser&role=student">学生</a>
                <a href="?method=seeuser&role=teacher">老师</a>
                <a href="?method=seeuser&role=classteacher">班主任</a>
        </div>*/
    function seeuser_student(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        //先将班级号-班级名构造成字典,避免多次查询
        $sql="SELECT ClassID,Name FROM classes";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Class=array();
        for ($i=0;$i<sizeof($res_class);$i++){
            $Class[$res_class[$i]['ClassID']]=$res_class[$i]['Name'];
        }
        echo <<<EOT
        <div id="informent" class="listscroll">
        <table border="1" class="tablelist">
                <tr>
                    <th>编号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>身份证号码</th>
                    <th>电话号码</th>
                    <th>班级</th>
                </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $Sex_str=$res[$i]['Sex']==0?"男":"女";
            echo <<<EOT
            <tr>
                <td>{$res[$i]['StudentID']}</td>
                <td>{$res[$i]['Name']}</td>
                <td>{$Sex_str}</td>
                <td>{$res[$i]['Age']}</td>
                <td>{$res[$i]['IDCardNo']}</td>
                <td>{$res[$i]['PhoneNum']}</td>
                <td>{$Class[$res[$i]['ClassID']]}</td>
            </tr>
EOT;
        }
        echo <<<EOT
            </table></div>
EOT;
    }
    function seeuser_teacherorclassteacher($role){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        if ($role == "teacher"){
            $sql="SELECT * FROM teachers";
        }else if ($role == "classteacher"){
            $sql="SELECT * FROM classteachers";
        }
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div id="informent" class="listscroll">
        <table border="1"  class="tablelist">
                <tr>
                    <th>编号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>             
                    <th>电话号码</th>
                </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $Sex_str=$res[$i]['Sex']==0?"男":"女";
            if ($role == "teacher"){
                $id=$res[$i]["TeacherID"];
            }else if ($role == "classteacher"){
                $id=$res[$i]["ClassTeacherID"];
            }
            echo <<<EOT
            <tr>
                <td>{$id}</td>
                <td>{$res[$i]['Name']}</td>
                <td>{$Sex_str}</td>
                <td>{$res[$i]['Age']}</td>
                <td>{$res[$i]['PhoneNum']}</td>
            </tr>
EOT;
        }
        echo <<<EOT
            </table></div>
EOT;
    }
    function deluser_role(){
        echo <<<EOT
        <div id="infors" class="main-entry">
                    <a href="?method=deluser&role=classteacher" class="classtch"><span class="title">
                    <i class="developer"></i>班主任</span><s></s></a>
                    <a href="?method=deluser&role=teacher" class="teacher"><span class="title">
                    <i class="developer"></i>教师</span><s></s></a> 
                    <a href="?method=deluser&role=student" class="student"><span class="title">
                    <i class="developer"></i>学生</span><s></s></a> 
        </div>
EOT;
    }
        /*<div id="infors">
                    <a href="?method=deluser&role=student">学生</a>
                    <a href="?method=deluser&role=teacher">老师</a>
                    <a href="?method=deluser&role=classteacher">班主任</a>
        </div>*/  
    function deluser_student(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM students";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        //先将班级号-班级名构造成字典,避免多次查询
        $sql="SELECT ClassID,Name FROM classes";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Class=array();
        for ($i=0;$i<sizeof($res_class);$i++){
            $Class[$res_class[$i]['ClassID']]=$res_class[$i]['Name'];
        }
        echo <<<EOT
            <form action="deluser.php" method="post" >
            <input type="text" name="role" value="student" style="display:none">
            <div class="listscroll" id="informent">
            <table border="1" class="tablelist" >
                    <tr>
                        <th>编号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>身份证号码</th>
                        <th>电话号码</th>
                        <th>班级</th>
                        <th>是否删除</th>
                    </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $Sex_str=$res[$i]['Sex']==0?"男":"女";
            echo <<<EOT
                <tr>
                    <td>{$res[$i]['StudentID']}</td>
                    <td>{$res[$i]['Name']}</td>
                    <td>{$Sex_str}</td>
                    <td>{$res[$i]['Age']}</td>
                    <td>{$res[$i]['IDCardNo']}</td>
                    <td>{$res[$i]['PhoneNum']}</td>
                    <td>{$Class[$res[$i]['ClassID']]}</td>
                    <td><input name="del[]" type="checkbox" value="{$res[$i]['StudentID']}"></td>
                </tr>
EOT;
        }
        echo <<<EOT
                </table>
                </br>
                <input type="submit" value="提交" id="btn2">
                </div>
            </form>
EOT;
    }
    function deluser_teacher(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
                <form action="deluser.php" method="post">
                <input type="text" name="role" value="teacher" style="display:none">
                <div class="listscroll" id="informent">
                <table border="1" class="tablelist">
                        <tr>
                            <th>编号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>电话号码</th>
                            <th>是否删除</th>
                        </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $Sex_str=$res[$i]['Sex']==0?"男":"女";
            echo <<<EOT
                    <tr>
                        <td>{$res[$i]['TeacherID']}</td>
                        <td>{$res[$i]['Name']}</td>
                        <td>{$Sex_str}</td>
                        <td>{$res[$i]['Age']}</td>
                        <td>{$res[$i]['PhoneNum']}</td>
                        <td><input name="del[]" type="checkbox" value="{$res[$i]['TeacherID']}"></td>
                    </tr>
EOT;
        }
        echo <<<EOT
                    </table>
                    </div>
                    <input type="submit" value="提交" id="btn1">
                </form>
EOT;
    }
    function deluser_classteacher(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM classteachers";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
                    <form action="deluser.php" method="post" >
                    <input type="text" name="role" value="classteacher" style="display:none">
                    <div class="listscroll" id="informent">
                    <table border="1" class="tablelist">
                            <tr>
                                <th>编号</th>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>年龄</th>
                                <th>电话号码</th>
                                <th>是否删除</th>
                            </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $Sex_str=$res[$i]['Sex']==0?"男":"女";
            echo <<<EOT
                        <tr>
                            <td>{$res[$i]['ClassTeacherID']}</td>
                            <td>{$res[$i]['Name']}</td>
                            <td>{$Sex_str}</td>
                            <td>{$res[$i]['Age']}</td>
                            <td>{$res[$i]['PhoneNum']}</td>
                            <td><input name="del[]" type="checkbox" value="{$res[$i]['ClassTeacherID']}"></td>
                        </tr>
EOT;
        }
        echo <<<EOT
                        </table>
                        </div>
                        <input type="submit" value="提交" id="btn1">
                    </form>
EOT;
    }
    function addscore_url(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT CourseID,Name FROM courses";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Course=array();
        for($i=0;$i<sizeof($res_class);$i++){
            $Course[$res_class[$i]['CourseID']]=$res_class[$i]['Name'];
        }
        $sql="SELECT TeacherID,Name FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res_teacher=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Teacher=array();
        for($i=0;$i<sizeof($res_teacher);$i++){
            $Teacher[$res_teacher[$i]['TeacherID']]=$res_teacher[$i]['Name'];
        }
        $sql="SELECT * FROM teaching WHERE TeachingID in (SELECT TeachingID FROM scores)";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div class="listscroll" id="informent">
                    <table border="1" class="tablelist">
                            <tr>
                                <th>授课号</th>
                                <th>课程名</th>
                                <th>授课老师</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $url="?method=addscore&teachingid=".$res[$i]["TeachingID"];
            echo <<<EOT
                        <tr>
                            <td>{$res[$i]['TeachingID']}</td>
                            <td>{$Course[$res[$i]['CourseID']]}</td>
                            <td>{$Teacher[$res[$i]['TeacherID']]}</td>
                            <td>{$res[$i]['ClassTime']}</td>
                            <td><a href="{$url}">添加成绩</a></td>
                        </tr>
EOT;
        }
        echo <<<EOT
                       </table></div>
EOT;
        }
    function addscore($TeachingID){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT StudentID FROM scores WHERE TeachingID='$TeachingID'";
        $query=mysqli_query($conn,$sql);
        $res_1=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $length=sizeof($res_1);
        echo <<<EOT
                <form method="post" action="submit_score.php" >
                    <input type="text" name="TeachingID" style="display:none" value="{$TeachingID}">
                    <div  class="listscroll" id="informent">
                    <table border="1" class="tablelist">
                    <tr>
                        <th>姓名</th>
                        <th>状态</th>
                        <th>成绩</th>
                    </tr>
EOT;
        for ($j=0;$j<$length;$j++){
            $StudentID=$res_1[$j]['StudentID'];
            $StuName=get_stuname($StudentID);
            echo <<<EOT
                    <tr>
                        <td>
                            $StuName
                            <input type="text" name="StudentID[]" style="display:none" value="{$StudentID}">
                        </td>
                        <td>
                            <select name="State[]">
                                <option value="1">正考</option>
                                <option value="2">补考</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="Score[]">
                        </td>
                    </tr>
EOT;
        }
        echo <<<EOT
                    </table></br>
                    <input type="submit" name="submit" value="提交" id="btn2">
                    </div>
                </form>
EOT;
    }
        function get_coursename($conn,$CourseID){
            $sql="SELECT Name FROM courses WHERE CourseID='$CourseID'";
            $query=mysqli_query($conn,$sql);
            $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
            return $res[0]['Name'];
        }
        function get_stuname($stu_id){
            $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
            $sql="SELECT Name FROM students WHERE StudentID='$stu_id'";
            $query=mysqli_query($conn,$sql);
            $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
            return $res[0]['Name'];
        }
    function seescore_url(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT CourseID,Name FROM courses";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Course=array();
        for($i=0;$i<sizeof($res_class);$i++){
            $Course[$res_class[$i]['CourseID']]=$res_class[$i]['Name'];
        }
        $sql="SELECT TeacherID,Name FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res_teacher=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Teacher=array();
        for($i=0;$i<sizeof($res_teacher);$i++){
            $Teacher[$res_teacher[$i]['TeacherID']]=$res_teacher[$i]['Name'];
        }
        $sql="SELECT * FROM teaching WHERE TeachingID in (SELECT TeachingID FROM scores)";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div class="listscroll" id="informent">
                        <table border="1" class="tablelist">
                                <tr >
                                    <th>授课号</th>
                                    <th>课程名  </th>
                                    <th>授课老师</th>
                                    <th>时间  </th>
                                    <th>操作  </th>
                                </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $url="?method=seescore&teachingid=".$res[$i]["TeachingID"];
            echo <<<EOT
                            <tr>
                                <td>{$res[$i]['TeachingID']}</td>
                                <td>{$Course[$res[$i]['CourseID']]}</td>
                                <td>{$Teacher[$res[$i]['TeacherID']]}</td>
                                <td>{$res[$i]['ClassTime']}</td>
                                <td><a href="{$url}">查看成绩</a></td>
                            </tr>
EOT;
        }
        echo <<<EOT
                           </table></div>
EOT;
    }
    function seescore($TeachingID)
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_DBNAME) or die("数据库连接失败");
        $sql = "SELECT * FROM scores WHERE TeachingID='$TeachingID'";
        $query = mysqli_query($conn, $sql);
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $length = sizeof($res);
        echo <<<EOT
        <div id="informent" class="listscroll">
                    <table border="1" class="tablelist">
                    <tr>
                        <th>姓名</th>
                        <th>状态</th>
                        <th>成绩</th>
                    </tr>
EOT;
        for ($j = 0; $j < $length; $j++) {
            $StudentID = $res[$j]['StudentID'];
            $StuName = get_stuname($StudentID);
            $State = $res[$j]['State'];
            if ($State == 0) {
                $State_str = "暂无";
            } else if ($State == 1) {
                $State_str = "正考";
            } else {
                $State_str = "补考";
            }
            $Score = $res[$j]['Score'];
            $Score_str = $Score == '' ? "无" : $Score;
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
    function checkscore_url(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT CourseID,Name FROM courses";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Course=array();
        for($i=0;$i<sizeof($res_class);$i++){
            $Course[$res_class[$i]['CourseID']]=$res_class[$i]['Name'];
        }
        $sql="SELECT TeacherID,Name FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res_teacher=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Teacher=array();
        for($i=0;$i<sizeof($res_teacher);$i++){
            $Teacher[$res_teacher[$i]['TeacherID']]=$res_teacher[$i]['Name'];
        }
        $sql="SELECT * FROM teaching WHERE TeachingID in (SELECT TeachingID FROM scores)";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div class="listscroll" id="informent">
                            <table border="1" class="tablelist" >
                                    <tr>
                                        <th>授课号</th>
                                        <th>课程名</th>
                                        <th>授课老师</th>
                                        <th>时间</th>
                                        <th>操作</th>
                                    </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $url="?method=checkscore&teachingid=".$res[$i]["TeachingID"];
            echo <<<EOT
                                <tr>
                                    <td>{$res[$i]['TeachingID']}</td>
                                    <td>{$Course[$res[$i]['CourseID']]}</td>
                                    <td>{$Teacher[$res[$i]['TeacherID']]}</td>
                                    <td>{$res[$i]['ClassTime']}</td>
                                    <td><a href="{$url}">修改成绩</a></td>
                                </tr>
EOT;
        }
        echo <<<EOT
                               </table></div>
EOT;
    }
    function checkscore($TeachingID){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT * FROM scores WHERE TeachingID='$TeachingID'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $length=sizeof($res);
        echo <<<EOT
                    <form method="post" action="submit_score.php">
                        <input type="text" name="TeachingID" style="display:none" value="{$TeachingID}">
                        <div class="listscroll"  id="informent">
                        <table border="1" class="tablelist">
                        <tr>
                            <th>姓名</th>
                            <th>状态</th>
                            <th>成绩</th>
                        </tr>
EOT;
        for ($j=0;$j<$length;$j++){
            $StudentID=$res[$j]['StudentID'];
            $StuName=get_stuname($StudentID);
            echo <<<EOT
                        <tr>
                            <td>
                                $StuName
                                <input type="text" name="StudentID[]" style="display:none" value="{$StudentID}">
                            </td>
                            <td>
                                <select name="State[]">
EOT;
            if ($res[$j]['State'] ==1){
                echo <<<EOT
                                    <option value="1" selected>正考</option>
                                    <option value="2">补考</option>
EOT;
            }else{
                echo <<<EOT
                                    <option value="1">正考</option>
                                    <option value="2" selected>补考</option>
EOT;
            }
            echo <<<EOT
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Score[]" value="{$res[$j]['Score']}">
                            </td>
                        </tr>
EOT;
        }
        echo <<<EOT
                        </table></br>
                        <input type="submit" name="submit" value="提交" id="btn2">
                        </div>
                    </form>
EOT;
    }
    function delscore_url(){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败");
        $sql="SELECT CourseID,Name FROM courses";
        $query=mysqli_query($conn,$sql);
        $res_class=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Course=array();
        for($i=0;$i<sizeof($res_class);$i++){
            $Course[$res_class[$i]['CourseID']]=$res_class[$i]['Name'];
        }
        $sql="SELECT TeacherID,Name FROM teachers";
        $query=mysqli_query($conn,$sql);
        $res_teacher=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $Teacher=array();
        for($i=0;$i<sizeof($res_teacher);$i++){
            $Teacher[$res_teacher[$i]['TeacherID']]=$res_teacher[$i]['Name'];
        }
        $sql="SELECT * FROM teaching WHERE TeachingID in (SELECT TeachingID FROM scores)";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo <<<EOT
        <div class="listscroll" id="informent">
                                <table border="1" class="tablelist">
                                        <tr>
                                            <th>授课号</th>
                                            <th>课程名</th>
                                            <th>授课老师</th>
                                            <th>时间</th>
                                            <th>操作</th>
                                        </tr>
EOT;
        for ($i=0;$i<sizeof($res);$i++){
            $url="?method=delscore&teachingid=".$res[$i]["TeachingID"];
            echo <<<EOT
                                    <tr>
                                        <td>{$res[$i]['TeachingID']}</td>
                                        <td>{$Course[$res[$i]['CourseID']]}</td>
                                        <td>{$Teacher[$res[$i]['TeacherID']]}</td>
                                        <td>{$res[$i]['ClassTime']}</td>
                                        <td><a href="{$url}">删除成绩</a></td>
                                    </tr>
EOT;
        }
        echo <<<EOT
                                   </table></div>
EOT;
    }
    function delscore($TeachingID)
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_DBNAME) or die("数据库连接失败");
        $sql = "SELECT * FROM scores WHERE TeachingID='$TeachingID'";
        $query = mysqli_query($conn, $sql);
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $length = sizeof($res);
        echo <<<EOT
                    <form method="post" action="delscore.php" >
                    <input type="text" name="TeachingID" value="{$TeachingID}" style="display:none">
                    <div class="listscroll" id="informent">
                        <table border="1" class="tablelist">
                        <tr>
                            <th>姓名</th>
                            <th>状态</th>
                            <th>成绩</th>
                            <th>是否删除</th>
                        </tr>
EOT;
        for ($j = 0; $j < $length; $j++) {
            $StudentID = $res[$j]['StudentID'];
            $StuName = get_stuname($StudentID);
            $State = $res[$j]['State'];
            if ($State == 0) {
                $State_str = "暂无";
            } else if ($State == 1) {
                $State_str = "正考";
            } else {
                $State_str = "补考";
            }
            $Score = $res[$j]['Score'];
            $Score_str = $Score == '' ? "无" : $Score;
            echo <<<EOT
                        <tr>
                            <td>$StuName</td>
                            <td>$State_str</td>
                            <td>$Score_str</td>
                            <td><input name="del[]" type="checkbox" value="{$StudentID}"></td>
                        </tr>
EOT;
        }
        echo <<<EOT
                    </table></br>
                    <input type="submit" name="submit" value="提交" id="btn2">
                    </div>
                </form>
EOT;
    }
?>