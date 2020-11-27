<?php
/* Smarty version 3.1.33, created on 2020-11-27 09:13:03
  from 'C:\xampp\htdocs\prestashop\admin223zh17js\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc060afd5d894_21664810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead7933d8c77989fd54405c2fe76fed787ee8358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin223zh17js\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1606298140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc060afd5d894_21664810 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
