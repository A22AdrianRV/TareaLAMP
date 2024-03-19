<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:24:09
  from '/app/admin/themes/default/template/controllers/modules/readmore-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f469576772_73685319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746faa59cffe4d8e75a3405551c7a8c080af1a39' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/modules/readmore-header.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f469576772_73685319 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'v'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }
}
