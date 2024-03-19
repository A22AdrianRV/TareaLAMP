<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:24:16
  from '/app/admin/themes/default/template/helpers/list/list_action_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f470713d43_87295336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cce563ae8d3f8746b2960a89118339f2a18f7222' => 
    array (
      0 => '/app/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f470713d43_87295336 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
