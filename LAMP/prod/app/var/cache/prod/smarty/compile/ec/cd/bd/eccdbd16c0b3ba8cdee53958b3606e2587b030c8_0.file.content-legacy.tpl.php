<?php
/* Smarty version 4.3.4, created on 2024-03-19 22:14:03
  from '/app/admin/themes/default/template/content-legacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa0e2b96e888_28133765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccdbd16c0b3ba8cdee53958b3606e2587b030c8' => 
    array (
      0 => '/app/admin/themes/default/template/content-legacy.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa0e2b96e888_28133765 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
