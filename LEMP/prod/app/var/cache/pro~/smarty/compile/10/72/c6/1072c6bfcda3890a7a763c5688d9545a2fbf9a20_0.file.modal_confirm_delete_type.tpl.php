<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:24:07
  from '/app/admin/themes/default/template/controllers/images/modal_confirm_delete_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f467466b33_43876172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1072c6bfcda3890a7a763c5688d9545a2fbf9a20' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/images/modal_confirm_delete_type.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f467466b33_43876172 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <div class="form-group">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

  </div>

  <div class="modal-checkbox">
    <input type="checkbox" id="delete_linked_images" name="delete">
    <label for="delete_linked_images"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Delete the images linked to this image setting",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>
</label>
  </div>
</div>
<?php }
}
