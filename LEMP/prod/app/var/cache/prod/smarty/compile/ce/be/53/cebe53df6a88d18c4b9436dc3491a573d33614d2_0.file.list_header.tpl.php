<?php
/* Smarty version 4.3.4, created on 2024-03-19 21:32:35
  from '/app/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa0473b7bab4_81803006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebe53df6a88d18c4b9436dc3491a573d33614d2' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa0473b7bab4_81803006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194427360165fa0473b7b5c9_05280513', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_194427360165fa0473b7b5c9_05280513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_194427360165fa0473b7b5c9_05280513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
