<?php
/* Smarty version 4.3.4, created on 2024-03-19 20:29:17
  from '/app/themes/classic/templates/customer/password-new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f9f59d9f5538_08445088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '949532a2d0fad5e72b8d700c4e8cf8645e2787ac' => 
    array (
      0 => '/app/themes/classic/templates/customer/password-new.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9f59d9f5538_08445088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5880738665f9f59d9f1708_11419087', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16036800065f9f59d9f2202_49248508', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166382736465f9f59d9f4a36_80482214', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_5880738665f9f59d9f1708_11419087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_5880738665f9f59d9f1708_11419087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset your password','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_16036800065f9f59d9f2202_49248508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16036800065f9f59d9f2202_49248508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" method="post">
    <ul class="ps-alert-error">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
        <li class="item">
          <i>
            <svg viewBox="0 0 24 24">
              <path fill="#fff" d="M11,15H13V17H11V15M11,7H13V13H11V7M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20Z"></path>
            </svg>
          </i>
          <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
      <section class="form-fields renew-password">

        <div class="email">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address: %email%','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%email%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_email']->value )))),$_smarty_tpl ) );?>

        </div>

        <div class="container-fluid">
          <div class="row form-group">
            <label class="form-control-label col-md-3 offset-md-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-4">
              <input class="form-control" type="password" data-validate="isPasswd" name="passwd" value="">
            </div>
          </div>

          <div class="row form-group">
            <label class="form-control-label col-md-3 offset-md-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmation','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-4">
              <input class="form-control" type="password" data-validate="isPasswd" name="confirmation" value="">
            </div>
          </div>

          <input type="hidden" name="token" id="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="id_customer" id="id_customer" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_customer']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="reset_token" id="reset_token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['reset_token']->value, ENT_QUOTES, 'UTF-8');?>
">

          <div class="row form-group">
            <div class="offset-md-5">
              <button class="btn btn-primary" type="submit" name="submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Password','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </div>

      </section>
    </form>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_166382736465f9f59d9f4a36_80482214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_166382736465f9f59d9f4a36_80482214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
    <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
  </ul>
<?php
}
}
/* {/block 'page_footer'} */
}
