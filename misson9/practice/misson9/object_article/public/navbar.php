
<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="navbar-header"> 
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="/practice/misson9/object_article/index.php">首页</a>
					</div>
					<div id="fh5co-navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
							<?php
								@session_start();
								if(@$_SESSION['isLogin']==1 || @$_SESSION['isLogin']==2){
									echo "<a href='/practice/misson9/object_article/user/alterUser.php?id={$_SESSION['master']['id']}'><span><span class='border'>{$_SESSION['master']['username']}";	
								}else{
									echo "<a href='/practice/misson9/object_article/login.php'><span><span class='border'>登录";
								}	
							?></span></span></a></li>
								<?php
									include($_SERVER['DOCUMENT_ROOT']."/practice/misson9/object_article/public/dbconnect.php");
									$sql="SELECT category FROM categorys";
									$res=mysqli_query($link,$sql);
									while($category=@mysqli_fetch_row($res)){
										echo  "<li><a href='/practice/misson9/object_article/index.php?category={$category[0]}'><span><span class='border'>{$category[0]}</span></span></a></li>";
									}
								?>	
							<?php
								if(@$_SESSION['isLogin']==1 || @$_SESSION['isLogin']==2){
									echo "<li><a href='/practice/misson9/object_article/logout.php'><span><span class='border'>退出</span></span></a></li>";	
								}	
							?>
						<li class="header_input"><span><span class="border">
						<form action="/practice/misson9/object_article/index.php<?php echo !empty($_GET['category'])?'?category='.$_GET['category']:null?>" method='post'><input type="text" name="searchContent"  value="<?php echo !empty($_REQUEST['searchContent'])?$_REQUEST['searchContent']:'搜索文章内容'?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索文章内容';}"/><input type="submit" value="搜索"></form></span></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>