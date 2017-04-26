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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">评论管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
							<?php
								$search_username=!empty($_REQUEST['username'])?$_REQUEST['username']:'';
								$search_content=!empty($_REQUEST['content'])?$_REQUEST['content']:'';
							?>
                            <th width="70">评论者:</th>
                            <td><input class="common-text" placeholder="评论者" name="username"  value="<?php echo $search_username;?>" type="text"></td>
							<th width="70">评论内容:</th>
                            <td><input class="common-text" placeholder="评论内容" name="content" value="<?php echo $search_content;?>" type="text"></td>
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
                        <a href="addComment.php"><i class="icon-font"></i>新增评论</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>                  
                            <th>ID</th>
							<th>文章ID</th>
							<th>标题</th>
                            <th>评论者</th>
                            <th>评论内容</th>
							<th>状态</th>
							<th>回复</th>
                            <th>评论时间</th>
                            <th>操作</th>
                        </tr>
						<?php
							include("../public/dbconnect.php");
							$page=!empty($_GET['page'])?$_GET['page']:1;
							$sql="SELECT COUNT(*) FROM comment WHERE username LIKE '%". $search_username."%' AND content LIKE '%".$search_content."%'";
							$res=mysqli_query($link,$sql);
							$count=mysqli_fetch_assoc($res)['COUNT(*)'];
							$limit=10;
							$pageCount=ceil($count/$limit);
							$sql="SELECT c.id,c.articleId,a.title,c.username,c.content,c.status,c.reply,c.createdTime FROM comment c LEFT JOIN article a ON c.articleId=a.id WHERE c.username LIKE '%". $search_username."%' AND c.content LIKE '%".$search_content."%' LIMIT ".($page-1)*$limit.",".$limit;
							$i=0;
							$res=mysqli_query($link,$sql);
							while(list($id,$articleId,$title,$username,$content,$status,$reply,$createTime)=@mysqli_fetch_row($res)){
						?>
                        <tr>
                            <td><?php  echo $id?></td>
							<td><?php  echo $articleId?></td>
							<td><?php  echo $title?></td>
							<td><?php  echo $username?></td>
							<td><?php  echo $content?></td>
                            <td><?php  echo $status==1?"开启":"关闭"?></td>
                            <td><?php  echo $reply?></td>
                            <td><?php  date_default_timezone_set('prc');echo date("Y年m月d日 H:i:s",$createTime);?></td>
                            <td>
                                <a class="link-update" href="./alterComment.php?id=<?php echo $id?>">修改</a>
                                <a class="link-del" href="./deleteComment.php?id=<?php echo $id?>">删除</a>
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
							echo "<a href='./comment.php?page=1&username={$search_username}&content={$search_content}'>首页</a>";
							for($page_i=5;$page_i>0;$page_i--){
								$page_previous=$page-$page_i;
								if($page_previous>0){
									echo "<a href='./comment.php?page={$page_previous}&username={$search_username}&content={$search_content}'>".$page_previous."</a>";
								}
							}
							echo "第{$page}/";
							echo "{$pageCount}页";
							for($page_i=1;$page_i<=5;$page_i++){
								$page_next=$page+$page_i;
								if($page_next<=$pageCount){
									echo "<a href='./comment.php?page={$page_next}&username={$search_username}&content={$search_content}'>".$page_next."</a>";
								}
							}
							echo "<a href='./comment.php?page={$pageCount}&username={$search_username}&content={$search_content}'>尾页</a>"
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