<?php
	include_once("./public/pdodbconnect.php");
	$id=$_GET['id'];
	$sql=<<<EOF
		SELECT username,tel,info,isAdmin,createdTime FROM user WHERE id={$id};
EOF;
	$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	$res=$link->query($sql);
	$res=$res->fetch();
?>

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
            <div class="crumb-list"><i class="icon-font"></i><a href="./controlPanel.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./controlPanelUser.php">用户管理</a><span class="crumb-step">&gt;</span><span>更改用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAlterUser.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>用户名：</th>
                                <td>
									 <input class="common-text required" required="required" id="username" name="username" size="50" value=" <?php echo $res['username']?>" type="text">
                                   
                                </td>
                            </tr>
	                       <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                    <input class="common-text required"  id="password" name="password" size="50" value="" type="password">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>重复密码：</th>
                                <td>
									<input class="common-text required"  id="repassword" name="repassword" size="50" value="" type="password">
                                </td>
                            </tr>
							 <tr>
                                <th><i class="require-red">*</i>电话号码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="tel" name="tel" size="50" value="<?php echo $res['tel']?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="info"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="10"><?php echo $res['info']?></textarea></td>
                            </tr>
							<tr>
                                <th>是否为管理员：</th>
                                <td>
									<input class="common-text required"  id="isAdmin" name="isAdmin" size="50" value="0" type="radio" <?php echo $res['isAdmin']==2?'':'checked'?> />否
									<input class="common-text required"  id="isAdmin" name="isAdmin" size="50" value="2" type="radio" <?php echo $res['isAdmin']==2?'checked':''?>/>是
								</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
									<input name="id" value="<?php echo $id?>" type="hidden"/>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit"/>
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button"/>
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