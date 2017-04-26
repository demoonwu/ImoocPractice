<?php
	include("../public/acl.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="../css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <script type="text/javascript" src="../js/libs/modernizr.min.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./article.php">博文管理</a><span class="crumb-step">&gt;</span><span>新增博文</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAddArticle.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
							<tr>
                                <th><i class="require-red">*</i>文章分类：</th>
                                <td>
                                    <select name="category" >
										<?php
										    include("../public/dbconnect.php");
											$sql="SELECT category FROM categorys;";
											$res=mysqli_query($link,$sql);
												while($category=mysqli_fetch_row($res)){
													echo "<option value='{$category[0]}'>{$category[0]}</option>";
												}
										?>
									</select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" required="required"  name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" required="required" name="author" size="50"  type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>配图：</th>
                                <td><input required="required" name="pic" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="20"></textarea></td>
                            </tr>
							<tr>
                                <th>状态：</th>
                                <td>
									<input class="common-text" name="status" value=1 size="50"  type="radio" checked>开启
									<input class="common-text" name="status" value=2 size="50"  type="radio">关闭
								</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
					</table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>