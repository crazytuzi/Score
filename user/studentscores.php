
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>成绩管理系统学生主页</title>
<link rel="shortcut icon" href="/acadmicRes/assets/favicon.ico" />
<link href="../css/studentHome.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>


</head>

<body>

<!-- defaultHeader-->
<div id="blueBar">
    <div class="clearfix" id="pageHead">
        <h1 id="pageLogo"><a href="../index.php" title="Home"></a></h1>
        <div id="jewelContainer">
            
        </div>
        <div class="clearfix" id="headNav">
            <div class="lfloat">
                
            </div>
            <div class="rfloat">
                <ul id="pageNav" role="navigation">
                    <li id="navHome"><a href="/acadmicManager/index.cfm" class="topNavLink">主页</a></li>
                    
                    <li id="navAccount">
                        <a class="topNavLink" id="navAccountLink" href="index.cfm?event=studentProfile:DEFAULT_EVENT" rel="toggle" role="button">注销<i class="accountPulldown"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script language="javascript" type="text/javascript">
    //注销
    <!--
    $(document).ready(function() {
        
        $("#navAccountLink").click(function(){
            $("#navAccountLinkPop").toggle();
            return false;
        });
        
        $("a.jewelButton").click(function(){
            
            var targetID = $(this).attr('data-target');
            $("#" + targetID).toggleClass("toggleTargetClosed");
            $("div.triggerJewelFlyout[id!=" + targetID + "]").addClass("toggleTargetClosed");

            var targetID = $(this).attr('data-icon');
            $("#" + targetID).toggleClass("openToggler");
            $("div.triggerJewel[id!=" + targetID + "]").removeClass("openToggler");
            
        });
        
    });
    // -->
    //]]>               
</script>
<div id="globalContainer" class="hasLeftCol">
    <div id="content" class="fb_content clearfix">
        <div id="mainContainer">
            <div id="leftColContainer">
                <div id="leftCol">
                    <!-- pageNavigater-->
                    <!-- userProfile-->
                    <div id="pagelet_welcome_box" data-referrer="pagelet_welcome_box">
                        <div class="UIImageBlock clearfix welcomeBox">
                            <a class="welcomeBoxBlock UIImageBlock_Image UIImageBlock_MED_Image" href="index.cfm?event=studentProfile:DEFAULT_EVENT"><img class="img" src="/acadmicRes/assets/graphic/userSmall.png" style="background-image: url('user/profile_s.jpg');">请上传证件照</a>
                            <div class="prs UIImageBlock_Content UIImageBlock_MED_Content">
                                <a class="welcomeBoxName" href="index.cfm?event=studentProfile:DEFAULT_EVENT">潘晓梅</a>
                                <a class="welcomeBoxProfileLink" href="index.cfm?event=studentProfile:modifyProfile">修改个人档案</a>
                            </div>
                        </div>
                    </div>
                    <!--/userProfile-->

                    <div id="pagelet_navigation">
                        <div class="uiFutureSideNav" id="sideNav">
                            <div id="pagelet_main_nav"></div>
                            
                            <div id="pagelet_manager_nav">
                                <div class="homeSideNav mtm" id="managerNav">

                                    
                                    
                                    
                                        <div class="navHeader">学生门户</div>
                                        <!-- studentPortal-->
                                        <div class="mts mbm droppableNav uiSideNavSection uiFutureSideNavSection">
                                            <ul class="uiSideNav" role="navigation">
                                                
                                                <li class="sideNavItem" id="navItem_app_studentProfile">
                                                    <div class="buttonWrap"></div>
                                                    <a class="item clearfix" href="index.cfm?event=studentProfile:DEFAULT_EVENT">
                                                        <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span><span class="maxCountIndicator"></span></span></div>
                                                        <div>
                                                            <span class="imgWrap"><i class="img navOperation studentProfile"></i></span>
                                                            <div class="linkWrap noCount">学生档案</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                
                                                <li class="sideNavItem" id="navItem_app_studentMark">
                                                    <div class="buttonWrap"></div>
                                                    <a class="item clearfix" href="index.cfm?event=studentProfile:courseMark">
                                                        <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span><span class="maxCountIndicator"></span></span></div>
                                                        <div>
                                                            <span class="imgWrap"><i class="img navOperation studentMark"></i></span>
                                                            <div class="linkWrap noCount">课程成绩</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                
                                                <li class="sideNavItem" id="navItem_app_studentPortal">
                                                    <div class="buttonWrap"></div>
                                                    <a class="item clearfix" href="index.cfm?event=studentPortal:DEFAULT_EVENT">
                                                        <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span><span class="maxCountIndicator"></span></span></div>
                                                        <div>
                                                            <span class="imgWrap"><i class="img navOperation studentPortal"></i></span>
                                                            <div class="linkWrap noCount">学习进程规划</div>
                                                        </div>
                                                    </a>
                                                    <ul >
                                                        <li id="navItem_app_studentPortal_courseTable">
                                                            <a class="subitem clearfix" href="index.cfm?event=studentPortal:examTable">
                                                                <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span></span></div>
                                                                <div><span class="linkChild">考试安排</span></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                                <li class="sideNavItem" id="navItem_app_chooseCourse">
                                                    
                                                    
                                                    <ul >
                                                        <li id="navItem_app_chooseCourse_courseTable">
                                                            <a class="subitem clearfix" href="index.cfm?event=chooseCourse:courseTable">
                                                                <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span></span></div>
                                                                <div><span class="linkChild">个人课表</span></div>
                                                            </a>
                                                        </li>
                                                       
                                                    </ul>
                                                </li>
                                                
                                                <li class="sideNavItem" id="navItem_app_cetApply">
                                                    <div class="buttonWrap"></div>
                                                    <a class="item clearfix" href="index.cfm?event=cetApply:DEFAULT_EVENT">
                                                        <div class="rfloat"><img class="uiLoadingIndicatorAsync img" src="/acadmicRes/assets/graphic/loading.gif" alt="" width="16" height="11"><span class="count hidden_elem uiSideNavCount"><span class="countValue fss">0</span><span class="maxCountIndicator"></span></span></div>
                                                        <div>
                                                            <span class="imgWrap"><i class="img navOperation cetApply"></i></span>
                                                            <div class="linkWrap noCount">外语等级考试</div>
                                                        </div>
                                                    </a>
                                                    <ul >
                                                       
                                                    </ul>
                                                </li>
                                                
                                                
                                            </ul>
                                        </div>
                                        <!-- /studentPortal-->
                                    
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /pageNavigater-->
                </div>
            </div>
            <div id="contentCol" class="clearfix ">
                <div id="rightCol">
                    <!-- pageRight-->
                    
                    <!-- /pageRight-->
                </div>
                <div id="contentArea">
                    <!-- pageMain-->
                    <div id="headArea">
    <div class="uiHeader uiHeaderWithImage ptm">
        <div class="clearfix uiHeaderTop">
            <div class="uiHeaderActions rfloat">
            </div>
            <div>
                <h2 class="uiHeaderTitle">
                    <i class="uiHeaderImage img icon16x16 application"></i>成绩档案
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="UIElement">
    <ul class="senateFirstPage">
        <li>
            <div class="clearfix" id="welcome">
                
                <div class="UItab">
                    <div class="tabLables">
                        <span  class="active" id="labSummary" tabTarget="Summary">学分修读进度</span>
                        <span  id="labPlan" tabTarget="Plan">必修课</span>
                        <span  id="labCommon" tabTarget="Common">选修课</span>
                        <span  id="labCET" tabTarget="CET">外语等级考试</span>
                    </div>
                </div>
                <script language="javascript" type="text/javascript">
                    //<![CDATA[
                    <!--
                    $(document).ready(function() {
                        
                        /* init Tab */
                        $("div.tabContent").hide();
                        $("div#" + $("div.tabLables span.active").attr("tabTarget")).show();
                        
                        $("div.tabLables > span").click(function(){
                            var $targetID = $(this).attr("tabTarget");
                            
                            $("div.tabLables span").removeClass("active");
                            $(this).addClass("active");
                            
                            $("div.tabContent").not('[id="' + $targetID + '"]').hide();
                            $("div.tabContent#" + $targetID).show();
                        });
                        
                    });
                    
                    // -->
                    //]]>
                </script>
                
                <div id="Summary" class="tabContent">
                    
                    <div class="noticeBlock">
                        <h3>学分修读情况</h3>
                        <p><span class="img icon16x16 message"></span>下面列出的是您目前修读课程所获得的各项学分统计和平均学分绩点</p>
                        <hr/>
                    </div>
                    
                    <div class="UICircle clearfix">
                        <ul class="boxNavigation">
                            <li class="huge"><em>128.5</em><span>总学分</span></li>
                            
                                <li class="large deepblue"><em>101.5</em><span>必修课</span></li>
                            
                                <li class="normal green"><em>22</em><span>选修课</span></li>
                            
                                <li class="normal"><em>25</em><span>学位课</span></li>
                            
                                <li class="normal blue"><em>5</em><span>全校通选</span></li>
                            
                                <li class="normal orange"><em>4</em><span>体育类</span></li>
                            
                        </ul>
                    </div>
                    
                    <div class="UICircle clearfix">
                        <ul class="boxNavigation">
                            
                                <li class="large red"><em>4.066</em><span>平均绩点</span></li>
                            
                                <li class="large deepblue"><em>4.077</em><span>必修课绩点</span></li>
                            
                                <li class="large purple"><em>4.076</em><span>学位课绩点</span></li>
                            
                        </ul>
                    </div>
                </div>

                <div id="Plan" class="tabContent">
                
                    <div class="noticeBlock">
                        <h3>培养方案课程</h3>
                        <p><span class="img icon16x16 message"></span>下面列出的是您在每个学年修读课程成绩及该门课程所获得的课程绩点</p>
                        <hr/>
                    </div>
                    
                    
                            <table class="UItable" border="1">
                                
                                <tr>
                                    <td colspan="8">
                                        <span class="number bold">2017-2018</span> 学年
                                        共计 <span class="number bold">8</span> 门课程
                                    </td>
                                </tr>
                                
                                

                                        <tr class="cellBorder">
                                            <td width="11" rowspan="10">秋</td>
                                        </tr>
                                        <tr class="cellBorder">
                                            <td>课程</td>
                                            <td align="center" width="80">课程号</td>
                                            <td align="center" width="40">学分</td>
                                            <td align="center" width="60">课程性质</td>
                                            <td align="center" width="60">正考</td>
                                            <td align="center" width="60">补考</td>
                                            <td align="center" width="60">绩点</td>
                                        </tr>

                                        
                                                
                                                <tr class="cellBorder ">
                                                    <td>Linux系统及程序设计 </td>
                                                    <td align="center"><span class="number">143990050</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">95.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">18.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机操作系统原理 </td>
                                                    <td align="center"><span class="number">143990160</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">99.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">14.70</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机网络B </td>
                                                    <td align="center"><span class="number">143990210</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">86.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">14.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>密码学及其应用 </td>
                                                    <td align="center"><span class="number">143990260</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">94.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">17.60</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>体育达标1 </td>
                                                    <td align="center"><span class="number">185990015</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">2.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机操作系统综合设计 </td>
                                                    <td align="center"><span class="number">143990170</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">94.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">8.80</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>科技英语阅读 </td>
                                                    <td align="center"><span class="number">208900060</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">92.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">8.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>数据可视化 </td>
                                                    <td align="center"><span class="number">143940150</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">94.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">13.20</span></td>
                                                    
                                                </tr>
                                            
                                        
                                        <tr>
                                            <td colspan="8" align="right">
                                                平均学分绩点 <span class="number bold">4.338</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                必修课绩点 <span class="number bold">4.335</span>
                                            </td>
                                        </tr>
                                        
                                    
                                
                            </table>
                        
                            <table class="UItable" border="1">
                                
                                <tr>
                                    <td colspan="8">
                                        <span class="number bold">2016-2017</span> 学年
                                        共计 <span class="number bold">18</span> 门课程
                                    </td>
                                </tr>
                                
                                

                                        <tr class="cellBorder">
                                            <td width="11" rowspan="10">春</td>
                                        </tr>
                                        <tr class="cellBorder">
                                            <td>课程</td>
                                            <td align="center" width="80">课程号</td>
                                            <td align="center" width="40">学分</td>
                                            <td align="center" width="60">课程性质</td>
                                            <td align="center" width="60">正考</td>
                                            <td align="center" width="60">补考</td>
                                            <td align="center" width="60">绩点</td>
                                        </tr>

                                        
                                                
                                                <tr class="cellBorder ">
                                                    <td>程序综合设计 </td>
                                                    <td align="center"><span class="number">143990080</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">97.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">9.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机组成原理 </td>
                                                    <td align="center"><span class="number">143140150</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">99.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">19.60</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>毛泽东思想和中国特色社会主义理论体系概论 </td>
                                                    <td align="center"><span class="number">251900030</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">88.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">15.20</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>数据库原理及应用A </td>
                                                    <td align="center"><span class="number">143990390</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">96.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">18.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>信息安全数学基础 </td>
                                                    <td align="center"><span class="number">143990560</span></td>
                                                    <td align="center"><span class="number">3.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">100.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">17.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>形势与政策4 </td>
                                                    <td align="center"><span class="number">255900054</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">2.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>综合外语A4 </td>
                                                    <td align="center"><span class="number">201990014</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">85.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">7.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>算法分析B </td>
                                                    <td align="center"><span class="number">143990420</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">99.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">14.70</span></td>
                                                    
                                                </tr>
                                            
                                        
                                        <tr>
                                            <td colspan="8" align="right">
                                                平均学分绩点 <span class="number bold">4.535</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                必修课绩点 <span class="number bold">4.480</span>
                                            </td>
                                        </tr>
                                        
                                    

                                        <tr class="cellBorder">
                                            <td width="11" rowspan="12">秋</td>
                                        </tr>
                                        <tr class="cellBorder">
                                            <td>课程</td>
                                            <td align="center" width="80">课程号</td>
                                            <td align="center" width="40">学分</td>
                                            <td align="center" width="60">课程性质</td>
                                            <td align="center" width="60">正考</td>
                                            <td align="center" width="60">补考</td>
                                            <td align="center" width="60">绩点</td>
                                        </tr>

                                        
                                                
                                                <tr class="cellBorder ">
                                                    <td>电工电子技术A1 </td>
                                                    <td align="center"><span class="number">221990011</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">93.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">12.90</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>概率论与数理统计B </td>
                                                    <td align="center"><span class="number">161990060</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">97.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">14.10</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>马克思主义基本原理 </td>
                                                    <td align="center"><span class="number">251900040</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">88.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">11.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>数字逻辑与数字系统 </td>
                                                    <td align="center"><span class="number">223995110</span></td>
                                                    <td align="center"><span class="number">4.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">92.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">18.90</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>思想政治理论课实践教学 </td>
                                                    <td align="center"><span class="number">255900060</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">87.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">7.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>形势与政策3 </td>
                                                    <td align="center"><span class="number">255900053</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">2.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>综合外语A3 </td>
                                                    <td align="center"><span class="number">201990013</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">83.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">9.90</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>Web交互设计开发 </td>
                                                    <td align="center"><span class="number">143940120</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">81.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">9.30</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>科技信息检索与技术 </td>
                                                    <td align="center"><span class="number">548900020</span></td>
                                                    <td align="center"><span class="number">1.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">91.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">4.10</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>面向对象程序设计B(C++) </td>
                                                    <td align="center"><span class="number">143990010</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">94.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">13.20</span></td>
                                                    
                                                </tr>
                                            
                                        
                                        <tr>
                                            <td colspan="8" align="right">
                                                平均学分绩点 <span class="number bold">3.988</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                必修课绩点 <span class="number bold">4.058</span>
                                            </td>
                                        </tr>
                                        
                                    
                                
                            </table>
                        
                            <table class="UItable" border="1">
                                
                                <tr>
                                    <td colspan="8">
                                        <span class="number bold">2015-2016</span> 学年
                                        共计 <span class="number bold">19</span> 门课程
                                    </td>
                                </tr>
                                
                                

                                        <tr class="cellBorder">
                                            <td width="11" rowspan="12">春</td>
                                        </tr>
                                        <tr class="cellBorder">
                                            <td>课程</td>
                                            <td align="center" width="80">课程号</td>
                                            <td align="center" width="40">学分</td>
                                            <td align="center" width="60">课程性质</td>
                                            <td align="center" width="60">正考</td>
                                            <td align="center" width="60">补考</td>
                                            <td align="center" width="60">绩点</td>
                                        </tr>

                                        
                                                
                                                <tr class="cellBorder ">
                                                    <td>高等数学A2 </td>
                                                    <td align="center"><span class="number">161990012</span></td>
                                                    <td align="center"><span class="number">6.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">86.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">21.60</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>军事课 </td>
                                                    <td align="center"><span class="number">555900010</span></td>
                                                    <td align="center"><span class="number">1.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">5.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>离散数学A </td>
                                                    <td align="center"><span class="number">143990230</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">93.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">17.20</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>数据结构A </td>
                                                    <td align="center"><span class="number">143990360</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">100.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">20.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>思想道德修养与法律基础 </td>
                                                    <td align="center"><span class="number">251900010</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">84.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">10.20</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>线性代数A </td>
                                                    <td align="center"><span class="number">161990080</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">90.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">12.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>信息安全专业导论2 </td>
                                                    <td align="center"><span class="number">143990092</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">78.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">1.40</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>形势与政策2 </td>
                                                    <td align="center"><span class="number">255900052</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">2.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>综合外语A2 </td>
                                                    <td align="center"><span class="number">201990012</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">86.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">10.80</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>书法入门 </td>
                                                    <td align="center"><span class="number">218900040</span></td>
                                                    <td align="center"><span class="number">1.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">84.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">3.40</span></td>
                                                    
                                                </tr>
                                            
                                        
                                        <tr>
                                            <td colspan="8" align="right">
                                                平均学分绩点 <span class="number bold">4.004</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                必修课绩点 <span class="number bold">4.028</span>
                                            </td>
                                        </tr>
                                        
                                    

                                        <tr class="cellBorder">
                                            <td width="11" rowspan="11">秋</td>
                                        </tr>
                                        <tr class="cellBorder">
                                            <td>课程</td>
                                            <td align="center" width="80">课程号</td>
                                            <td align="center" width="40">学分</td>
                                            <td align="center" width="60">课程性质</td>
                                            <td align="center" width="60">正考</td>
                                            <td align="center" width="60">补考</td>
                                            <td align="center" width="60">绩点</td>
                                        </tr>

                                        
                                                
                                                <tr class="cellBorder ">
                                                    <td>程序设计(C) </td>
                                                    <td align="center"><span class="number">143990020</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">84.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">13.60</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>高等数学A1 </td>
                                                    <td align="center"><span class="number">161990011</span></td>
                                                    <td align="center"><span class="number">6.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">88.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">22.80</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>入学教育 </td>
                                                    <td align="center"><span class="number">565900010</span></td>
                                                    <td align="center"><span class="number">1.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">90.4</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">4.04</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>信息安全专业导论1 </td>
                                                    <td align="center"><span class="number">143990091</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">82.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">1.60</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>形势与政策1 </td>
                                                    <td align="center"><span class="number">255900051</span></td>
                                                    <td align="center"><span class="number">0.5</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center">通过</td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">2.50</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>中国近现代史纲要 </td>
                                                    <td align="center"><span class="number">251900020</span></td>
                                                    <td align="center"><span class="number">2.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">81.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">6.20</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>综合外语A1 </td>
                                                    <td align="center"><span class="number">201990011</span></td>
                                                    <td align="center"><span class="number">4.0</span></td>
                                                    <td align="center">必修</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">85.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">14.00</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机基础技能训练A </td>
                                                    <td align="center"><span class="number">141990020</span></td>
                                                    <td align="center"><span class="number">1.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">84.6</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">3.46</span></td>
                                                    
                                                </tr>
                                            
                                                
                                                <tr class="cellBorder ">
                                                    <td>计算机科学导论A </td>
                                                    <td align="center"><span class="number">141990010</span></td>
                                                    <td align="center"><span class="number">3.0</span></td>
                                                    <td align="center">限选</td>
                                                    
                                                    
                                                            <td align="center"><span class="number">80.0</span></td>
                                                            <td align="center"></td>
                                                            <td align="center"><span class="number">9.00</span></td>
                                                    
                                                </tr>
                                            
                                        
                                        <tr>
                                            <td colspan="8" align="right">
                                                平均学分绩点 <span class="number bold">3.509</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                必修课绩点 <span class="number bold">3.597</span>
                                            </td>
                                        </tr>
                                        
                                    
                                
                            </table>
                        
                    
                </div>
                
                <div id="Common" class="tabContent">
                
                    <div class="noticeBlock">
                        <h3>全校通选课</h3>
                        <hr/>
                    </div>
                    
                    
                        
                        <table class="UItable" border="1">
                            <tr>
                                <td width="100">学期</td>
                                <td>课程</td>
                                <td align="center" width="80">课程号</td>
                                <td align="center" width="40">学分</td>
                                <td align="center" width="60">正考</td>
                                <td align="center" width="60">补考</td>
                                <td align="center" width="60">绩点</td>
                            </tr>
                            

                                <tr class="cellBorder ">
                                    <td><span class="number bold">2017-2018-1</span></td>
                                    <td>数学文化</td>
                                    <td align="center"><span class="number">LXS60010</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">100.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">5.00</span></td>
                                    
                                </tr>
                                
                            

                                <tr class="cellBorder ">
                                    <td><span class="number bold">2016-2017-2</span></td>
                                    <td>社交舞</td>
                                    <td align="center"><span class="number">TYS60040</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">95.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">4.50</span></td>
                                    
                                </tr>
                                
                            

                                <tr class="cellBorder ">
                                    <td><span class="number bold">2016-2017-1</span></td>
                                    <td>中国近现代战争史</td>
                                    <td align="center"><span class="number">258900020</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">92.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">4.20</span></td>
                                    
                                </tr>
                                
                            

                                <tr class="cellBorder ">
                                    <td><span class="number bold">2015-2016-2</span></td>
                                    <td>认知与发展素质拓展训练</td>
                                    <td align="center"><span class="number">198900080</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">85.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">3.50</span></td>
                                    
                                </tr>
                                
                            

                                <tr class="cellBorder ">
                                    <td><span class="number bold">2015-2016-2</span></td>
                                    <td>语言表达与沟通技巧实践训练</td>
                                    <td align="center"><span class="number">198900060</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">89.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">3.90</span></td>
                                    
                                </tr>
                                
                            
                            <tr>
                                <td colspan="7" align="right">已获得学分 <span class="number bold">5.00</span></td>
                            </tr>
                        </table>
                    
                    

                </div>
                
                <div id="Physical" class="tabContent">
                    
                    <div class="noticeBlock">
                        <h3>体育项目成绩</h3>
                        <hr/>
                    </div>
                    
                    
                        
                        <table class="UItable" border="1">
                            <tr>
                                <td width="120">学期</td>
                                <td>课程</td>
                                <td align="center" width="80">课程号</td>
                                <td align="center" width="40">学分</td>
                                <td align="center" width="60">正考</td>
                                <td align="center" width="60">补考</td>
                                <td align="center" width="60">绩点</td>
                            </tr>
                            
                                
                                <tr class="cellBorder ">
                                    <td><span class="number bold">2016-2017-2</span></td>
                                    <td>跆拳道A</td>
                                    <td align="center"><span class="number">183154440</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">74.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">2.40</span></td>
                                    
                                </tr>
                            
                                
                                <tr class="cellBorder ">
                                    <td><span class="number bold">2016-2017-1</span></td>
                                    <td>体育保健学D</td>
                                    <td align="center"><span class="number">183154650</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">93.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">4.30</span></td>
                                    
                                </tr>
                            
                                
                                <tr class="cellBorder ">
                                    <td><span class="number bold">2015-2016-2</span></td>
                                    <td>足球A</td>
                                    <td align="center"><span class="number">183154360</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">78.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">2.80</span></td>
                                    
                                </tr>
                            
                                
                                <tr class="cellBorder ">
                                    <td><span class="number bold">2015-2016-1</span></td>
                                    <td>健美操B</td>
                                    <td align="center"><span class="number">183154410</span></td>
                                    <td align="center"><span class="number">1.0</span></td>
                                    
                                            <td align="center"><span class="number">100.0</span></td>
                                            <td align="center"></td>
                                            <td align="center"><span class="number">5.00</span></td>
                                    
                                </tr>
                            
                            <tr>
                                <td colspan="7" align="right">已获得学分 <span class="number bold">4.00</span></td>
                            </tr>
                        </table>
                    
                    
                    
                </div>

                <div id="CET" class="tabContent">
                
                    <div class="noticeBlock">
                        <h3>四六级考试成绩记录</h3>
                        <hr/>
                    </div>
                    
                    

                        <table class="UItable" border="1">
                            
                            <tr>
                                <td width="180">准考证号</td>
                                <td>考试场次</td>
                                <td width="60">语言级别</td>
                                <td align="center" width="40">总分</td>
                                <td align="center" width="40">听力</td>
                                <td align="center" width="40">阅读</td>
                                <td align="center" width="40">写作</td>
                                <td align="center" width="40">综合</td>
                            </tr>
                            
                            
                                <tr class="cellBorder alertRow">
                                    <td><span class="numeric">510790172207123</span></td>
                                    <td>2017年 冬季 全国大学外语等级考试</td>
                                    <td><span class="numeric">CET6</span></td>
                                    
                                            <td align="center"><span class="numeric bold">411</span></td>
                                            <td align="center"><span class="numeric">130</span></td>
                                            <td align="center"><span class="numeric">161</span></td>
                                            <td align="center"><span class="numeric">120</span></td>
                                            <td align="center"><span class="numeric">0</span></td>
                                    
                                </tr>
                            
                                <tr class="cellBorder alertRow">
                                    <td><span class="numeric">510790171209029</span></td>
                                    <td>2017年 夏季 全国大学外语等级考试</td>
                                    <td><span class="numeric">CET6</span></td>
                                    
                                            <td align="center"><span class="numeric bold">363</span></td>
                                            <td align="center"><span class="numeric">118</span></td>
                                            <td align="center"><span class="numeric">139</span></td>
                                            <td align="center"><span class="numeric">106</span></td>
                                            <td align="center"><span class="numeric">0</span></td>
                                    
                                </tr>
                            
                                <tr class="cellBorder alertRow">
                                    <td><span class="numeric">510790162217419</span></td>
                                    <td>2016年 冬季 全国大学外语等级考试</td>
                                    <td><span class="numeric">CET6</span></td>
                                    
                                            <td align="center"><span class="numeric bold">359</span></td>
                                            <td align="center"><span class="numeric">100</span></td>
                                            <td align="center"><span class="numeric">144</span></td>
                                            <td align="center"><span class="numeric">115</span></td>
                                            <td align="center"><span class="numeric">0</span></td>
                                    
                                </tr>
                            
                                <tr class="cellBorder alertRow">
                                    <td><span class="numeric">510790161224910</span></td>
                                    <td>2016年 夏季 全国大学外语等级考试</td>
                                    <td><span class="numeric">CET6</span></td>
                                    
                                            <td align="center"><span class="numeric bold">388</span></td>
                                            <td align="center"><span class="numeric">130</span></td>
                                            <td align="center"><span class="numeric">148</span></td>
                                            <td align="center"><span class="numeric">110</span></td>
                                            <td align="center"><span class="numeric">0</span></td>
                                    
                                </tr>
                            
                                <tr class="cellBorder ">
                                    <td><span class="numeric">510790152107702</span></td>
                                    <td>2015年 冬季 全国大学外语等级考试</td>
                                    <td><span class="numeric">CET4</span></td>
                                    
                                            <td align="center"><span class="numeric bold">507</span></td>
                                            <td align="center"><span class="numeric">161</span></td>
                                            <td align="center"><span class="numeric">179</span></td>
                                            <td align="center"><span class="numeric">167</span></td>
                                            <td align="center"><span class="numeric">0</span></td>
                                    
                                </tr>
                            
                        </table>
                        
                    
                    
                </div>

            </div>
        </li>
    </ul>
</div>
                    <!-- /pageMain-->
                </div>
            </div>
        </div>
    </div>
    
    <!-- pageFoot-->
    <div id="pageFooter" data-referrer="page_footer">
        <div id="contentCurve"></div>
        <div class="clearfix" id="footerContainer">
            <div class="mrl lfloat" role="contentinfo">
                <div class="fsm fwn fcg"><span>互联课堂计划 © 2018</span></div>
            </div>
            <div class="navigation fsm fwn fcg" role="navigation">
                
            </div>
        </div>
    </div>
    <!-- /pageFoot-->
    
</div>
<!--/defaultContent-->

</body>
<!-- Page Metadata Generated On: 24-Apr-2018 04:59:51  Time Taken: 220 msecs -->
</html>




<a href="?method=seeinfo">查看信息</a>
</br>
<a href="?method=modinfo">修改信息</a>
</br>
<a href="?method=seescore&prom=0&term=0">查看成绩</a>
</br>
<a href="?method=modpassword">修改密码</a>
</br>
<?php
    session_start();
    $stu_id=$_SESSION['studentid'];
    $method=@$_GET['method'];
    $prom=@$_GET['prom'];
    $term=@$_GET['term'];
    switch ($method){
        case "seeinfo":stu_seeinfo($stu_id);break;
        case "modinof":stu_modinfo($stu_id);break;
        case "seescore":
            {
                stu_seescore($stu_id,$prom,$term);
                $prom='';
                $term='';
            };break;
        case "modpassword":header('Location:modpassword.php');break;
    }
    if ($prom !='' && $term != '') {
        stu_seescore($stu_id,$prom,$term);
    }
?>
<?php
    function stu_seeinfo($stu_id){
        $conn=mysqli_connect("localhost","root",'olily',"scoredb") or die("数据库连接失败");
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
            <p>姓名:{$Name}</p>
            <p>性别:{$Sex_str}</p>
            <p>年龄:{$Age}</p>
            <p>班级:{$ClassName}</p>
            <p>身份证号码:{$IDCardNo}</p>
            <p>电话号码:{$PhoneNum_str}</p>
EOT;
    }
    function get_classname($conn,$ClassID){
        $sql="SELECT Name FROM classes WHERE ClassID='$ClassID'";
        $query=mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res[0]['Name'];
    }
    function stu_modinfo($stu_id){
        $conn=mysqli_connect("localhost","root",'olily',"scoredb") or die("数据库连接失败");
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
    }
    function stu_seescore($stu_id,$prom,$term){
        echo <<<EOT
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
                <input type="submit" value="submit">
            </form>
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
        $conn=mysqli_connect("localhost","root",'olily',"scoredb") or die("数据库连接失败");
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
            <table border="1">
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
            </table>
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
?>