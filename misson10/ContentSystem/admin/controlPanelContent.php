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
			$selectTable="content";//设置查询数据表
			$selectArray=array("id","username","name","tel","info","createdTime");//设置查询字段
			$each_disNums=5;//设置每页显示数量
			$subPage_link="./controlPanelContent.php?current_page=";//设置跳转页码超链接
			
			if(!isset($_GET['current_page'])){
				$current_page=1;//设置当前页
			}else{
				$current_page=$_GET['current_page'];
			}
			$newPage=new selectpage($selectTable,$selectArray,$each_disNums,$subPage_link,$current_page);
			// try{
				// $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
				// //echo PDO::ATTR_DEFAULT_FETCH_MODE;
				// $sql="select * from user;";
				// $stmt=$link->prepare($sql);
				// $res=$stmt->execute();
				// if($res){
					// while($row=$stmt->fetch()){
						// print_r($row);
						// echo '<hr/>';
					// }
				// }
			// }catch(PDOException $e){
				// echo $e->getMessage();
			// }
		
		?>
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="./controlPanel.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">通讯录管理</span></div>
        </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="./addContent.php"><i class="icon-font"></i>新增联系人</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>所有人</th>
                            <th>联系人姓名</th>
                            <th>电话</th>
                            <th>备注</th>
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
							<td><?php  echo $row['name']?></td>
							<td><?php  echo $row['tel']?></td>
							<td><?php  echo $row['info']?></td>
							<td><?php   date_default_timezone_set('prc');echo date("Y年m月d日 H:i:s",$row['createdTime']);?></td>
                            <td>
                                <a class="link-update" href="./alterContent.php?id=<?php echo $row['id']?>">修改</a>
                                <a class="link-del" href="./deleteContent.php?id=<?php echo $row['id']?>">删除</a>
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