<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:38:28
  from '/app/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f7c42264c7_47800394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ffd7329ccab81f814029be2494edc0bcca5f1cc' => 
    array (
      0 => '/app/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f7c42264c7_47800394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
