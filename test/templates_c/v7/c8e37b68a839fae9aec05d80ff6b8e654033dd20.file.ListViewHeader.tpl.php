<?php /* Smarty version Smarty-3.1.7, created on 2018-10-30 09:47:23
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16053402995bd828ab775f41-22918931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e37b68a839fae9aec05d80ff6b8e654033dd20' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16053402995bd828ab775f41-22918931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_MODULES_LIST' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bd828ab78747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd828ab78747')) {function content_5bd828ab78747($_smarty_tpl) {?>



<div class="listViewPageDiv" id="listViewContent">
    <div class="col-sm-12 col-xs-12 ">
        <div id="listview-actions" class="listview-actions-container">
            <div class = "row">
                <div class='col-md-6'>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <span class="pull-right listViewActions" style="padding-right: 15px;">
                            <select class="select2 pickListSupportedModules" name="pickListSupportedModules" style="min-width: 220px;">
                                <option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['FOR_MODULE']->value){?> selected <?php }?>>
                                        <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label')=='Calendar'){?>
                                            <?php echo vtranslate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>

                                        <?php }else{ ?>
                                            <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>

                                        <?php }?>
                                    </option>
                                <?php } ?>
                            </select>
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div class="list-content row"><?php }} ?>