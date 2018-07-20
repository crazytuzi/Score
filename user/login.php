<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统统一登录界面</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/login.css" />
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.cookie.js"></script>
	<script language="javascript" type="text/javascript">
		function closeErrDiv(){
			$("#errMsgDiv").css('display','none'); 
			$("#bg").css('display','none'); 
		}
	    var checkSign = false;
	   	function Checkbox() {
	   		console.log(123);
	   		if (checkSign==true) {
            	document.getElementById("radioPass").checked=false;
			 	checkSign=false;
	   		} else if(checkSign==false) {
            	document.getElementById("radioPass").checked=true;
			 	checkSign=true;
	   			/*
	   			alert(222);
	   			$("#radioPass").checked="checked";
			 	checkSign=true;
			 	*/
	    	}
	    }
    </script>
</head>
	

<!--
	onkeydown="javascript:if(event.keyCode==13)loginSubmit();
-->
<body >
	<input id="idInput" type="hidden" value="company" />
	<div class="container clearfix">
		<div class="secL">
			<h2>成绩管理系统</h2>
			<p>
				满足国内大部分高校需求<br> 班主任 教师 学生三种角色均可使用<br> 更方便 快捷 安全可靠<br>  
			</p>
		</div>

		<div class="secR">
			<!--页面右侧透明背景-->
			<div class="box-bg"></div>
			<!--表单内容-->
			<form action="check_login.php" method="post" name="frmLogin" id="loginForm">
				<div class="form">
					<h1>登录平台</h1>
					<p>
						请用<span class="f9c442"> 工号或学号 </span>作为用户名登录
					</p>
					<div class="item clearfix">
						<label for="userNameIpt"></label> 
						<input type="text" tabindex="1" id="userNameIpt" name="username"
							notnull="true" info="用户名" value=""/>
					</div>
					<div class="item itempass clearfix">
						<label for="password"></label> 
						<input type="password" tabindex="2" id="password" name="password" notnull="true" info="密码"
							autocomplete="off" value="" />
					</div>
					<!--
					<div class="item validatepic clearfix">
						<img id="Code" src="/platform/loginstickyImg?math=true" width="75" height="30"
							style="display: inline; float: left;"/> 
						<input id="pwdInput" name="dtoUserCode"
							tabindex="3" class="ipt ipt-y f_l" type="text" style="margin-right: 5px; display: inline;" notnull="true"
							info="验证码" autocomplete="off" disableautocomplete /> 
						<a tabindex="4" class="changepic" id="forGetPassword" href="javascript:selectCode();">换一张?</a>
					</div>-->
					<div class="item itemRadio clearfix">
					    <input id="radioPass" type="checkbox" style="float: left;width:13px;height: 25px"   
					    onclick="Checkbox()">&nbsp;记住密码</input>  
						<a href="/platform/jsp/backPass/400NumCenter.jsp" style="float: right;">忘记密码?</a>
					</div>


					<div class="item">
					   <button type="submit" name="submit" tabindex="5"  id="btnSubmit" >登&nbsp;&nbsp;录</button>

					</div>
					<!--
						onclick="loginSubmit();"
						onkeydown="javascript:if(event.keyCode==13){event.returnValue = false}"
					-->
				</div>
			</form>
		</div>
		<div style="position: relative; top:250px;left:150px;text-align: center;float:left;padding-left: 200px;">
		 		<a target="_blank" id="beianpath" href="" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;Cursor:default;"><p id="beianhaoma" style="font-size:13px;color:transparent;"></p></a>
		</div>
	</div>

	<div id="bg"></div>



</body>
</html>

<!--

<form method="post" action="check_login.php">
	用户名:<input type="text" name="username" value="1">
	密码:<input type="password" name="password" value="123456">
	<input type="submit" name="submit">
</form>
-->