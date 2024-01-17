<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:21:40
  from '/var/www/blog_test/_templates/admin/a_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55b948234a7_28253463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9de99245a29e80ea1a2d132b87718236ee4e1f56' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/a_footer.tpl',
      1 => 1535752844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55b948234a7_28253463 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- content ends -->
<?php if ((!empty($_smarty_tpl->tpl_vars['message']->value))) {
echo '<script'; ?>
 type="text/javascript" charset="utf-8" async defer>
    $(".a_message").show().delay(5000).fadeOut('slow');
<?php echo '</script'; ?>
>
<?php }?>

</body>
</html><?php }
}
