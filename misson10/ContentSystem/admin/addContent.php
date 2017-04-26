<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>通讯录管理</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css"/>
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <script type="text/javascript" src="./js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <?php
		include_once("./public/topbar.php");
	?>
</div>
<div class="container clearfix">
   <?php
		include_once("./public/siderbar.php");
   ?>
    </div>
   <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="./index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./user.php">通讯录管理</a><span class="crumb-step">&gt;</span><span>新增记录</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAddContent.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        
                            <tr>
                                <th><i class="require-red">*</i>用户名：</th>
                                <td>
                                    <input class="common-text required" required="required" id="username" name="username" size="50" value="" type="text">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>姓名：</th>
                                <td>
                                    <input class="common-text required" required="required" id="name" name="name"  size="50" value="" type="text">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>电话号码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="tel" name="tel" size="50" value="" type="text">
                                </td>
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