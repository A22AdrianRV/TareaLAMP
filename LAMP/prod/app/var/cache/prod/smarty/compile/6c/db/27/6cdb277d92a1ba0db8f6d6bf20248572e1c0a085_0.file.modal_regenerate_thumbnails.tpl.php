<?php
/* Smarty version 4.3.4, created on 2024-03-19 22:14:06
  from '/app/admin/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa0e2e21ca13_59680572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cdb277d92a1ba0db8f6d6bf20248572e1c0a085' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa0e2e21ca13_59680572 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
