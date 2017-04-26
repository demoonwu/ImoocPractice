<?php
/* Smarty version 3.1.30, created on 2017-04-20 15:32:35
  from "D:\xampp\htdocs\practice\misson13\jkxySmarty\smartyTwoConfig\demoOne\tpl\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f8b8731c77d6_45970982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5a7cbc47530c4f2b6620d687de83079d945224' => 
    array (
      0 => 'D:\\xampp\\htdocs\\practice\\misson13\\jkxySmarty\\smartyTwoConfig\\demoOne\\tpl\\test.html',
      1 => 1492695152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f8b8731c77d6_45970982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.config", "news", 0);
?>


 <!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>

	</title>
</head>
<body>
	<div>
		<ul>
			<li><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</li>
			<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'content');?>
</li>
			<li><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'newsContent');?>
</li>
			<li><?php echo $_GET['username'];?>
</li>
			<li><?php echo $_SERVER['REMOTE_ADDR'];?>
</li>
			<li><?php echo @constant('__LINE__');?>
</li>
		</ul>
	</div>
</body>
</html><?php }
}
