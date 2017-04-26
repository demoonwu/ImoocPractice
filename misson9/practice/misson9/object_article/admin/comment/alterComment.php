<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$sql="SELECT c.id,c.articleId,a.title,c.username,c.content,c.status,c.reply,c.createdTime FROM comment c LEFT JOIN article a ON c.articleId=a.id WHERE c.ID={$id}";
	if($res=mysqli_query($link,$sql)){
		$comment=mysqli_fetch_assoc($res);
		
	}
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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="./article.php">文章管理</a><span class="crumb-step">&gt;</span><span>修改文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doAlterComment.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
							<tr>
                                <th>文章编号：</th>
                                <td>
                                    <?php
										echo $comment['articleId'];
									?>
                                </td>
                            </tr>
							<tr>
                                <th>文章标题：</th>
                                <td>
                                    <?php
										echo $comment['title'];
									?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>评论者：</th>
                                <td>
                                    <input class="common-text required" required="required"  name="username" size="50" value="<?php echo $comment['username'];?>" type="text">
                                </td>
                            </tr>
	                        <tr>
                                <th><i class="require-red">*</i>评论内容：</th>
                                <td><textarea name="content" required="required"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="8"><?php echo $comment['content'];?></textarea></td>
                            </tr>
                            <tr>
                                <th>回复：</th>
                                <td><textarea name="reply"  class="common-textarea" id="info" cols="30" style="width: 98%;" rows="8"><?php echo $comment['reply']?></textarea></td>
                            </tr>
							<tr>
                                <th>状态：</th>
                                <td>
									<input class="common-text" name="status" value=1 size="50"  type="radio" <?php echo $comment['status']==1?'checked':''?>>开启
									<input class="common-text" name="status" value=2 size="50"  type="radio" <?php echo $comment['status']==2?'checked':''?>>关闭
								</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
								    <input class="common-text" name="id" value=<?php echo $comment['id']?> size="50"  type="hidden">
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
