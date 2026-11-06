<?php
/* Smarty version 3.1.36, created on 2021-01-12 14:34:30
  from '/home/tymosw345/365dtm.com/membership/taylor/manager/templates/default/element/tv/renders/input/textbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdf9c6e2c245_83343160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6dac650932c456dd368f0734cd1edac179a01a8' => 
    array (
      0 => '/home/tymosw345/365dtm.com/membership/taylor/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1603386160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdf9c6e2c245_83343160 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    type="text" class="textfield"
    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['style']->value)===null||$tmp==='' ? '' : $tmp);?>

    tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['minLength'])===null||$tmp==='' ? '' : $tmp)) {?>,minLength: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['minLength'])===null||$tmp==='' ? '' : $tmp);
}?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxLength'])===null||$tmp==='' ? '' : $tmp)) {?>,maxLength: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxLength'])===null||$tmp==='' ? '' : $tmp);
}?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['regex'])===null||$tmp==='' ? '' : $tmp)) {?>,regex: new RegExp('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['regex'])===null||$tmp==='' ? '' : $tmp);?>
')<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['regexText'])===null||$tmp==='' ? '' : $tmp)) {?>,regexText: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['regexText'])===null||$tmp==='' ? '' : $tmp);?>
'<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
