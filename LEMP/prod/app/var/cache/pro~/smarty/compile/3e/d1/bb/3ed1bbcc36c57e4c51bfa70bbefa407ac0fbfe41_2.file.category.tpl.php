<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:29:03
  from '/app/themes/classic/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f58fbb6fd2_55636836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed1bbcc36c57e4c51bfa70bbefa407ac0fbfe41' => 
    array (
      0 => '/app/themes/classic/templates/catalog/listing/category.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:catalog/_partials/category-footer.tpl' => 1,
  ),
),false)) {
function content_65f9f58fbb6fd2_55636836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32756176665f9f58fbb4d53_59875991', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90395671365f9f58fbb6365_09653234', 'product_list_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_32756176665f9f58fbb4d53_59875991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_32756176665f9f58fbb4d53_59875991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_footer'} */
class Block_90395671365f9f58fbb6365_09653234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_90395671365f9f58fbb6365_09653234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_footer'} */
}
