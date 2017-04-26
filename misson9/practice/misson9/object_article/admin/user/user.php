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
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
							<?php
								$search_username=!empty($_REQUEST['username'])?$_REQUEST['username']:'';
								$search_email=!empty($_REQUEST['email'])?$_REQUEST['email']:'';
							?>
                            <th width="70">用户名:</th>
                            <td><input class="common-text" placeholder="用户名" name="username"  value="<?php echo $search_username;?>" type="text"></td>
							<th width="70">邮箱:</th>
                            <td><input class="common-text" placeholder="Emial" name="email" value="<?php echo $search_email;?>" type="text"></td>
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
                        <a href="addUser.php"><i class="icon-font"></i>新增用户</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>                        
                            <th>ID</th>
                            <th>用户名</th>
                            <th>状态</th>
                            <th>头像</th>
                            <th>邮箱</th>
                            <th>性别</th>
							<th>管理员</th>
							<th>备注</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
						<?php
							include("../public/dbconnect.php");
							$page=!empty($_GET['page'])?$_GET['page']:1;
							$sql="SELECT COUNT(*) FROM USER WHERE USERNAME LIKE '%". $search_username."%' AND EMAIL LIKE '%".$search_email."%'";
							$res=mysqli_query($link,$sql);
							$count=mysqli_fetch_assoc($res)['COUNT(*)'];
							$limit=10;
							$pageCount=ceil($count/$limit);
							$page=!empty($_GET['page'])?($_GET['page']<=$pageCount?($_GET['page']>=0?$_GET['page']:1):$pageCount):1;
						    $sql="SELECT ID,USERNAME,EMAIL,STATUS,SEX,PIC,isAdmin,INFO,CREATEDTIME FROM USER WHERE USERNAME LIKE '%". $search_username."%' AND EMAIL LIKE '%".$search_email."%' LIMIT ".($page-1)*$limit.",".$limit;
							$i=0;
							$res=mysqli_query($link,$sql);
							while(list($ID,$USERNAME,$EMAIL,$STATUS,$SEX,$PIC,$isAdmin,$INFO,$CREATEDTIME)=@mysqli_fetch_row($res)){
						?>
                        <tr>
                            <td class="tc"><input name="id[]" value="<?php  echo $ID;?>" type="checkbox"></td>
                            <td><?php  echo $ID?></td>
							<td><?php  echo $USERNAME?></td>
                            <td><?php  echo $STATUS==1?"开启":"关闭"?></td>
                            <td><img src="../uploads/<?php echo $PIC?>" width=30></td>
                            <td><?php  echo $EMAIL?></td>
							<td><?php  echo $SEX?></td>
							<td><?php  echo $isAdmin==2?"是":"否"?></td>
							<td><?php  echo $INFO?></td>
                            <td><?php   date_default_timezone_set('prc');echo date("Y年m月d日 H:i:s",$CREATEDTIME);?></td>
                            <td>
                                <a class="link-update" href="./alterUser.php?id=<?php echo $ID?>">修改</a>
                                <a class="link-del" href="./deleteUser.php?id=<?php echo $ID?>&&pic=<?php echo $PIC?>">删除</a>
                            </td>
                        </tr>
                        <?php
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
							echo "<a href='./user.php?page=1&username={$search_username}&email={$search_email}'>首页</a>";
							for($page_i=5;$page_i>0;$page_i--){
								$page_previous=$page-$page_i;
								if($page_previous>0){
									echo "<a href='./user.php?page={$page_previous}&username={$search_username}&email={$search_email}'>".$page_previous."</a>";
								}
							}
							echo "第{$page}/";
							echo "{$pageCount}页";
							for($page_i=1;$page_i<=5;$page_i++){
								$page_next=$page+$page_i;
								if($page_next<=$pageCount){
									echo "<a href='./user.php?page={$page_next}&username={$search_username}&email={$search_email}'>".$page_next."</a>";
								}
							}
							echo "<a href='./user.php?page={$pageCount}&username={$search_username}&email={$search_email}'>尾页</a>"
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