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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./comment.php">评论管理</a><span class="crumb-step">&gt;</span><span>新增评论</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAddComment.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
							<tr>
                                <th>文章编号：</th>
                                <td>
                                    <?php
										include('../public/dbconnect.php');
										//$articleId=$_GET['id'];
										echo $articleId=604;
		
									?>
                                </td>
                            </tr>
							<tr>
                                <th>文章标题：</th>
                                <td>
                                    <?php
										include('../public/dbconnect.php');
										$sql="SELECT title FROM article WHERE id={$articleId};";
										$res=mysqli_query($link,$sql);
										if($article=mysqli_fetch_assoc($res)){
											echo $article['title'];
										}else{
											echo "不存在的文章";
										};
									?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>评论者：</th>
                                <td>
                                    <input class="common-text required" required="required"  name="username" size="50" value="" type="text">
                                </td>
                            </tr>
	                        <tr>
                                <th><i class="require-red">*</i>评论内容：</th>
                                <td><textarea name="content" required="required"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="8"></textarea></td>
                            </tr>
                            <tr>
                                <th>回复：</th>
                                <td><textarea name="reply"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="8"></textarea></td>
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
								    <input class="common-text" name="articleId" value=<?php echo $articleId?> size="50"  type="hidden">
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