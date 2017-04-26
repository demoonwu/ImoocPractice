<?php
/* Smarty version 3.1.30, created on 2017-04-20 04:35:41
  from "D:\xampp\htdocs\practice\misson13\imoocSmarty\smartyTwo\demoTwo\tpl\demo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f81e7d362727_97430738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691bb915c20c04019e1757d0285d0f94bce1f406' => 
    array (
      0 => 'D:\\xampp\\htdocs\\practice\\misson13\\imoocSmarty\\smartyTwo\\demoTwo\\tpl\\demo.tpl',
      1 => 1492655739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f81e7d362727_97430738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2013158f81e7d323f18_27390413';
echo $_smarty_tpl->tpl_vars['demoTitle']->value;?>

<?php if ($_smarty_tpl->tpl_vars['demoNum']->value < 100) {?>
	
	优秀
	<?php } elseif ($_smarty_tpl->tpl_vars['demoNum']->value > 70) {?>
	良好
	<?php } elseif ($_smarty_tpl->tpl_vars['demoNum']->value > 60) {?>
	及格
	<?php } else { ?>
	不及格

<?php }
}
}
