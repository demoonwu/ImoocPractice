<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$sql="SELECT * FROM article WHERE ID={$id}";
	if($res=mysqli_query($link,$sql)){
		$article=mysqli_fetch_assoc($res);
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
                <form action="./doAlterArticle.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
					    <tbody>
							<tr>
                                <th><i class="require-red">*</i>文章分类：</th>
                                <td>
                                    <select name="category" >
										<?php
											$sql="SELECT category FROM categorys;";
											$res=mysqli_query($link,$sql);
												while($category=mysqli_fetch_row($res)){
													if($category[0]==$article['category']){
														echo "<option selected='selected' value='{$category[0]}'>{$category[0]}</option>";
													}else{
														echo "<option value='{$category[0]}'>{$category[0]}</option>";
													}
												}
										?>
									</select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" required="required"  name="title" size="50" value="<?php echo $article['title']?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" required="required" name="author" size="50"  value="<?php echo $article['author']?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>配图：</th>
                                <td><img src="../../upload_article_img/<?php echo $article['pic']?>" width=30><input  name="pic" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content"  class="common-textarea"   cols="30" style="width: 98%;" rows="30"><?php echo $article['content']?></textarea></td>
                            </tr>
							<tr>
                                <th>状态：</th>
                                <td>
									<input class="common-text" name="status" value=1 size="50"  type="radio" <?php echo $article['status']==1?'checked':''?>>开启
									<input class="common-text" name="status" value=2 size="50"  type="radio" <?php echo $article['status']==2?'checked':''?>>关闭
								</td>
                            </tr>
							<tr>
								<td>
									<input  name="id" value=<?php echo $article['id']?>  type="hidden">
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
