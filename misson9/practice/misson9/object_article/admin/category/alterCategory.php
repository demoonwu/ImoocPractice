<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$sql="SELECT id,category FROM categorys WHERE ID={$id}";
	if($res=mysqli_query($link,$sql)){
		$category=mysqli_fetch_assoc($res);
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
                <form action="./doAlterCategory.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
							<tr>
                                <th>分类编号：</th>
                                <td>
                                    <?php
										echo $category['id'];
									?>
                                </td>
                            </tr>
							<tr>
                                <th>分类标题：</th>
                                <td>
                                    <input class="common-text required" required="required"  name="category" size="50" value="<?php echo $category['category'];?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
								    <input class="common-text" name="id" value=<?php echo $category['id']?> size="50"  type="hidden">
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
