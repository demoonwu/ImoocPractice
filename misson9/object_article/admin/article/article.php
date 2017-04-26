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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">博文管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
							<?php
								$search_author=!empty($_REQUEST['author'])?$_REQUEST['author']:'';
								$search_title=!empty($_REQUEST['title'])?$_REQUEST['title']:'';
							?>
                            <th width="70">作者:</th>
                            <td><input class="common-text" placeholder="作者" name="author"  value="<?php echo $search_author;?>" type="text"></td>
							<th width="70">标题:</th>
                            <td><input class="common-text" placeholder="标题" name="title" value="<?php echo $search_title;?>" type="text"></td>
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
                        <a href="addArticle.php"><i class="icon-font"></i>新增博文</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>                  
                            <th>ID</th>
							<th>分类</th>
							<th>标题</th>
                            <th>作者</th>
                            <th>摘要</th>
							<th>状态</th>
							<th>图片</th>
                            <th>上传时间</th>
                            <th>操作</th>
                        </tr>
						<?php
							include("../public/dbconnect.php");
							$page=!empty($_GET['page'])?$_GET['page']:1;
							$sql="SELECT COUNT(*) FROM article WHERE title LIKE '%". $search_title."%' AND author LIKE '%".$search_author."%'";
							$res=mysqli_query($link,$sql);
							$count=mysqli_fetch_assoc($res)['COUNT(*)'];
							$limit=10;
							$pageCount=ceil($count/$limit);
							$page=!empty($_GET['page'])?($_GET['page']<=$pageCount?($_GET['page']>=0?$_GET['page']:1):$pageCount):1;
						    $sql="SELECT id,category,title,author,summary,status,pic,createdTime FROM article WHERE title LIKE '%". $search_title."%' AND author LIKE '%".$search_author."%' LIMIT ".($page-1)*$limit.",".$limit;
							$i=0;
							$res=mysqli_query($link,$sql);
							while(list($id,$category,$title,$author,$summary,$status,$pic,$createTime)=@mysqli_fetch_row($res)){
						?>
                        <tr>
                            <td><?php  echo $id?></td>
							<td><?php  echo $category?></td>
							<td><?php  echo $title?></td>
							<td><?php  echo $author?></td>
							<td><?php  echo mb_substr($summary,0,30,'utf-8');?></td>	
                            <td><?php  echo $status==1?"开启":"关闭"?></td>
                            <td><img src="../../upload_article_img/<?php echo $pic?>" width=30></td>
                            <td><?php   date_default_timezone_set('prc');echo date("Y年m月d日 H:i:s",$createTime);?></td>
                            <td>
                                <a class="link-update" href="./alterArticle.php?id=<?php echo $id?>">修改</a>
                                <a class="link-del" href="./deleteArticle.php?id=<?php echo $id?>&&pic=<?php echo $pic?>">删除</a>
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
							echo "<a href='./article.php?page=1&author={$search_author}&title={$search_title}'>首页</a>";
							for($page_i=5;$page_i>0;$page_i--){
								$page_previous=$page-$page_i;
								if($page_previous>0){
									echo "<a href='./article.php?page={$page_previous}&author={$search_author}&title={$search_title}'>".$page_previous."</a>";
								}
							}
							echo "第{$page}/";
							echo "{$pageCount}页";
							for($page_i=1;$page_i<=5;$page_i++){
								$page_next=$page+$page_i;
								if($page_next<=$pageCount){
									echo "<a href='./article.php?page={$page_next}&author={$search_author}&title={$search_title}'>".$page_next."</a>";
								}
							}
							echo "<a href='./article.php?page={$pageCount}&author={$search_author}&title={$search_title}'>尾页</a>"
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