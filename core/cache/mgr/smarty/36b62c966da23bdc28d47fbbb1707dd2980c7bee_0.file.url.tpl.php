<?php
/* Smarty version 3.1.36, created on 2021-01-12 14:34:31
  from '/home/tymosw345/365dtm.com/membership/taylor/manager/templates/default/element/tv/renders/input/url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdf9c7077413_57616912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b62c966da23bdc28d47fbbb1707dd2980c7bee' => 
    array (
      0 => '/home/tymosw345/365dtm.com/membership/taylor/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1603386160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdf9c7077413_57616912 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value, 'url');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['url']->value == (($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? '' : $tmp)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    type="text"
    value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->get('processedValue');?>
"
    onchange="MODx.fireResourceFormChange();"
    class="textfield x-form-text x-form-field"
    style="width: 283px;"
/>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {


    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));

    var fld = MODx.load({
        xtype: 'combo'

        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'

        ,triggerAction: 'all'
        ,width: 100
        ,allowBlank: true
        ,maxHeight: 300
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: {
            'select': {
                fn:MODx.fireResourceFormChange,
                scope:this
            }
        }
    });

    fld.wrap.applyStyles({
        display: "inline-block"
    });

    var fld = MODx.load({
        xtype: 'textfield'

        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>

        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,listeners: {
            'keydown': {
                fn:MODx.fireResourceFormChange,
                scope:this
            }
        }
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
