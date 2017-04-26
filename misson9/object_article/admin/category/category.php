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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">分类管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
							<?php
								$search_id=!empty($_REQUEST['id'])?$_REQUEST['id']:'';
								$search_category=!empty($_REQUEST['category'])?$_REQUEST['category']:'';
							?>
                            <th width="70">ID:</th>
                            <td><input class="common-text" placeholder="id" name="id"  value="<?php echo $search_id;?>" type="text"></td>
							<th width="70">分类:</th>
                            <td><input class="common-text" placeholder="默认分类" name="category" value="<?php echo $search_category;?>" type="text"></td>
                            <td><input class="btn btn-primary btn2"  type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="addCategory.php"><i class="icon-font"></i>新增分类</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>                  
                            <th>ID</th>
							<th>文章分类</th>
							<th>操作</th>
                        </tr>
						<?php
							include("../public/dbconnect.php");
							$page=!empty($_GET['page'])?$_GET['page']:1;
							$sql="SELECT COUNT(*) FROM categorys WHERE id LIKE '%". $search_id."%' AND category LIKE '%".$search_category."%'";
							$res=mysqli_query($link,$sql);
							$count=mysqli_fetch_assoc($res)['COUNT(*)'];
							$limit=10;
							$pageCount=ceil($count/$limit);
							$sql="SELECT id,category FROM categorys  WHERE id LIKE '%". $search_id."%' AND category LIKE '%".$search_category."%' LIMIT ".($page-1)*$limit.",".$limit;
							$i=0;
							$res=mysqli_query($link,$sql);
							while(list($id,$category)=@mysqli_fetch_row($res)){
						?>
                        <tr>
                            <td><?php  echo $id?></td>
							<td><?php  echo $category?></td>
                            <td>
                                <a class="link-update" href="./alterCategory.php?id=<?php echo $id?>">修改</a>
                                <a class="link-del" href="./deleteCategory.php?id=<?php echo $id?>">删除</a>
                            </td>
                        </tr>
                        <?php
							static $i=0;
							$i++;
							}
						?>
						</table>
                    <div class="list-page"> 
						<?php 	
							echo "数据共{$count}条,本页{$i}条";
						?>
					</div>
                    <div class="list-page"> 
						<?php 
							echo "<a href='./category.php?page=1&id={$search_id}&categor={$search_category}'>首页</a>";
							for($page_i=5;$page_i>0;$page_i--){
								$page_previous=$page-$page_i;
								if($page_previous>0){
									echo "<a href='./category.php?page={$page_previous}&id={$search_id}&categor={$search_category}'>".$page_previous."</a>";
								}
							}
							echo "第{$page}/";
							echo "{$pageCount}页";
							for($page_i=1;$page_i<=5;$page_i++){
								$page_next=$page+$page_i;
								if($page_next<=$pageCount){
									echo "<a href='./category.php?page={$page_next}&id={$search_id}&category={$search_category}'>".$page_next."</a>";
								}
							}
							echo "<a href='./category.php?page={$pageCount}&id={$search_id}&category={$search_category}'>尾页</a>"
						?>
					</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>