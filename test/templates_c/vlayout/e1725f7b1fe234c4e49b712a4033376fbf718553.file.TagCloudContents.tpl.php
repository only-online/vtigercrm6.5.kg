<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 12:24:19
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\TagCloudContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:409591c16c313b5f7-30301094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1725f7b1fe234c4e49b712a4033376fbf718553' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\TagCloudContents.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '409591c16c313b5f7-30301094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAGS' => 0,
    'TAG_ID' => 0,
    'TAG_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c16c318d39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c16c318d39')) {function content_591c16c318d39($_smarty_tpl) {?>
<div class="tagsContainer" id="tagCloud"><?php  $_smarty_tpl->tpl_vars['TAG_ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAG_ID']->_loop = false;
 $_smarty_tpl->tpl_vars['TAG_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGS']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAG_ID']->key => $_smarty_tpl->tpl_vars['TAG_ID']->value){
$_smarty_tpl->tpl_vars['TAG_ID']->_loop = true;
 $_smarty_tpl->tpl_vars['TAG_NAME']->value = $_smarty_tpl->tpl_vars['TAG_ID']->key;
?><a class="tagName cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['TAGS']->value[0][$_smarty_tpl->tpl_vars['TAG_NAME']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_NAME']->value;?>
</a>&nbsp;<?php } ?></div>	<?php }} ?>