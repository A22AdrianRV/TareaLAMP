<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:38:04
  from '/app/admin/themes/default/template/controllers/shop/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f7ac023008_78709238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa95c2d45103ba66f5bae7ee64ce5e881bde9707' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f7ac023008_78709238 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
