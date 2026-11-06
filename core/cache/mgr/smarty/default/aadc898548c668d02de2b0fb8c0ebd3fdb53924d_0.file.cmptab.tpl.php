<?php
/* Smarty version 3.1.36, created on 2021-01-12 12:43:02
  from '/home/tymosw345/365dtm.com/membership/taylor/core/components/migx/templates/mgr/cmptab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffddfa6e6ade1_38124920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aadc898548c668d02de2b0fb8c0ebd3fdb53924d' => 
    array (
      0 => '/home/tymosw345/365dtm.com/membership/taylor/core/components/migx/templates/mgr/cmptab.tpl',
      1 => 1610473370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffddfa6e6ade1_38124920 (Smarty_Internal_Template $_smarty_tpl) {
?>
{
    title: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmptabcaption']->value, ENT_QUOTES, 'UTF-8', true);?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmptabdescription']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        preventRender: true,
        id: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        configs: '<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
',
        columns: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['columns']->value;?>
'),
        pathconfigs: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['pathconfigs']->value;?>
'),
        fields: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['fields']->value;?>
'),
        wctx: '<?php echo $_smarty_tpl->tpl_vars['myctx']->value;?>
',
        url: Migx.config.connectorUrl,
        auth: '<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
',
        resource_id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value['id'];?>
',
        co_id: '<?php echo $_smarty_tpl->tpl_vars['connected_object_id']->value;?>
',
        pageSize: 10,
        object_id: '<?php echo $_smarty_tpl->tpl_vars['object_id']->value;?>
',
        bwrapCfg: {
            cls: 'main-wrapper'
        }       
    }]
}
<?php }
}
