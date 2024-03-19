<?php
/* Smarty version 4.3.4, created on 2024-03-19 22:14:07
  from '/app/admin/themes/default/template/controllers/modules/warning_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa0e2f449ff1_58037578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42cd0d3a7b225b495987eb76212b312e959a9641' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa0e2f449ff1_58037578 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }
}
