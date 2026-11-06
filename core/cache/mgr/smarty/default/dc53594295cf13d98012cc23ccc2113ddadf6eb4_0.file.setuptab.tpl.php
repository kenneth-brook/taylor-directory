<?php
/* Smarty version 3.1.36, created on 2021-01-12 12:43:02
  from '/home/tymosw345/365dtm.com/membership/taylor/core/components/migx/templates/mgr/setuptab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffddfa6e8cf60_63153292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc53594295cf13d98012cc23ccc2113ddadf6eb4' => 
    array (
      0 => '/home/tymosw345/365dtm.com/membership/taylor/core/components/migx/templates/mgr/setuptab.tpl',
      1 => 1610473370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffddfa6e8cf60_63153292 (Smarty_Internal_Template $_smarty_tpl) {
?> 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
