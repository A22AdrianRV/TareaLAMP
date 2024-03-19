<?php
/* Smarty version 4.3.4, created on 2024-03-19 21:32:41
  from '/app/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa0479029b35_48627164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5198a569f6f50015794e8f5dc9e3d327f643092' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa0479029b35_48627164 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
