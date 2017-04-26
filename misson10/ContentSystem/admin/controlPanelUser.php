<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
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
		<?php
			function __autoload($className){
				include_once("./public/".strtolower($className).".class.php");
			}
			$selectTable="user";//设置查询数据表
			$selectArray=array("id","username","tel","info","isAdmin","createdTime");//设置查询字段
			$each_disNums=5;//设置每页显示数量
			$subPage_link="./controlPanelUser.php?current_page=";//设置跳转页码超链接
			
			if(!isset($_GET['current_page'])){
				$current_page=1;//设置当前页
			}else{
				$current_page=$_GET['current_page'];
			}
			$newPage=new selectpage($selectTable,$selectArray,$each_disNums,$subPage_link,$current_page);
		
		?>
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="./addUser.php"><i class="icon-font"></i>新增用户</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                       <tr>
                            <th>ID</th>
                            <th>用户</th>
                            <th>电话</th>
                            <th>备注</th>
							<th>管理员</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
						<?php
							$res=$newPage->selectResult();
							while($row=$res->fetch()){
						?>
                        <tr>
                    
                            <td><?php  echo $row['id']?></td>
							<td><?php  echo $row['username']?></td>
							<td><?php  echo $row['tel']?></td>
							<td><?php  echo $row['info']?></td>
							<td><?php  echo $row['isAdmin']==2?"是":"否"?></td>
							<td><?php   date_default_timezone_set('prc');echo date("Y年m月d日 H:i:s",$row['createdTime']);?></td>
                            <td>
                                <a class="link-update" href="./AlterUser.php?id=<?php echo $row['id']?>">修改</a>
                                <a class="link-del" href="./deleteUser.php?id=<?php echo $row['id']?>">删除</a>
                            </td>
                        </tr>
						
						<?php
							};
						
						?>
                        
                    </table>
                    <div class="list-page"><?php echo $newPage->showPages()?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>