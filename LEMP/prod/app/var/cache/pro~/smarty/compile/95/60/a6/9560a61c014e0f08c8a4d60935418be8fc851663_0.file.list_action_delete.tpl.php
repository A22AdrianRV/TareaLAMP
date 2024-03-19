<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:24:07
  from '/app/admin/themes/default/template/controllers/images/helpers/list/list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f467239e29_05451999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9560a61c014e0f08c8a4d60935418be8fc851663' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/images/helpers/list/list_action_delete.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f467239e29_05451999 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="#"
 title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
 class="delete"
 onclick="
  <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
    var modalConfirmDeleteType = $('#modalConfirmDeleteType');
    $('.btn-confirm-delete-images-type', modalConfirmDeleteType).attr('data-confirm-url', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
');
    modalConfirmDeleteType.modal('show');
  <?php } else { ?>
    event.stopPropagation();event.preventDefault()
  <?php }?>
">
<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
