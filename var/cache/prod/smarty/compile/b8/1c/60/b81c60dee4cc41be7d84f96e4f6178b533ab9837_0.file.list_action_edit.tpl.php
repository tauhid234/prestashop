<?php
/* Smarty version 3.1.33, created on 2020-11-27 09:18:28
  from 'C:\xampp\htdocs\prestashop\admin223zh17js\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc061f46049a8_70265890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b81c60dee4cc41be7d84f96e4f6178b533ab9837' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin223zh17js\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1606298141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc061f46049a8_70265890 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
