<?php
/* Smarty version 3.1.33, created on 2020-11-27 09:19:32
  from 'C:\xampp\htdocs\prestashop\admin223zh17js\themes\default\template\controllers\addresses\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc06234519667_59612102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3424b332dd0b26bcef9b381a4930e8477d990906' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin223zh17js\\themes\\default\\template\\controllers\\addresses\\helpers\\form\\form.tpl',
      1 => 1606298140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc06234519667_59612102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4173682355fc06234504473_02777323', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20144548835fc062345105d6_23921457', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_4173682355fc06234504473_02777323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_4173682355fc06234504473_02777323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'vat_number') {?>
		<div id="vat_area" style="display: visible">
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_customer' && !isset($_smarty_tpl->tpl_vars['customer']->value)) {?>
		<label class="control-label col-lg-3 required" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer email','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "label"} */
/* {block "field"} */
class Block_20144548835fc062345105d6_23921457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_20144548835fc062345105d6_23921457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_customer') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['customer']->value)) {?>
			<div class="col-lg-9">
				<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['customer_view_url']->value;?>
">
					<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
 (<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
)
				</a>
			</div>
			<input type="hidden" name="id_customer" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
" />
			<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
" />
		<?php } else { ?>
			<?php echo '<script'; ?>
 type="text/javascript">
			$('input[name=email]').live('blur', function(e)
			{
				var email = $(this).val();
				if (email.length > 5)
				{
					var data = {};
					data.email = email;
					data.token = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
";
					data.ajax = 1;
					data.controller = "AdminAddresses";
					data.action = "loadNames";
					$.ajax({
						type: "POST",
						url: "ajax-tab.php",
						data: data,
						dataType: 'json',
						async : true,
						success: function(msg)
						{
							if (msg)
							{
								var infos = msg.infos.replace("\\'", "'").split('_');

								$('input[name=firstname]').val(infos[0]);
								$('input[name=lastname]').val(infos[1]);
								$('input[name=company]').val(infos[2]);
							}
						},
						error: function(msg)
						{
						}
					});
				}
			});
			<?php echo '</script'; ?>
>

			<div class="col-lg-4">
				<input type="email" id="email" name="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"/>
			</div>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'vat_number') {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
}
