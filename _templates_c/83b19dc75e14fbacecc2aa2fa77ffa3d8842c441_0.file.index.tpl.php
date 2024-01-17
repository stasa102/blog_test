<?php
/* Smarty version 4.3.4, created on 2024-01-15 15:32:47
  from '/var/www/blog_test/_templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a5501fa87ca3_10673004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b19dc75e14fbacecc2aa2fa77ffa3d8842c441' => 
    array (
      0 => '/var/www/blog_test/_templates/index.tpl',
      1 => 1705332765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top-gallery-slider.tpl' => 1,
    'file:newest-post.tpl' => 1,
    'file:older-posts.tpl' => 1,
    'file:bottom-gallery-slider.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65a5501fa87ca3_10673004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:top-gallery-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:newest-post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:older-posts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:bottom-gallery-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
