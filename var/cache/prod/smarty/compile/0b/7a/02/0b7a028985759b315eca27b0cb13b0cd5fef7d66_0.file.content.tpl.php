<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 16:23:41
  from 'C:\xampp\htdocs\prestashop\admin512cci02k\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcca31db685f7_77568518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7a028985759b315eca27b0cb13b0cd5fef7d66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin512cci02k\\themes\\default\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcca31db685f7_77568518 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
