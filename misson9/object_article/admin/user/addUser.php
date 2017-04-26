<?php
	include("../public/acl.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/practice/misson9/object_article/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/practice/misson9/object_article/admin/css/main.css"/>
    <script type="text/javascript" src="/practice/misson9/object_article/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
<?php 
include("../public/topbar.php");
?>
</div>
<div class="container clearfix">
<?php 
include("../public/sidebar.php");
?>   
   <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./user.php">用户管理</a><span class="crumb-step">&gt;</span><span>新增用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAddUser.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        
                            <tr>
                                <th><i class="require-red">*</i>用户名：</th>
                                <td>
                                    <input class="common-text required" required="required" id="username" name="username" size="50" value="" type="text">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="password" name="password" size="50" value="" type="password">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>确认密码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="repassword" name="repassword" size="50" value="" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th>邮箱：</th>
                                <td><input class="common-text" required="required" name="email" size="50"  type="text"></td>
                            </tr>
                            <tr>
                                <th>性别：</th>
                                <td>
									<input class="common-text" name="sex" value='男'size="50"  type="radio" checked>男
									<input class="common-text" name="sex" value='女'size="50"  type="radio">女
								</td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>头像：</th>
                                <td><input required="required" name="pic" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="info"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>