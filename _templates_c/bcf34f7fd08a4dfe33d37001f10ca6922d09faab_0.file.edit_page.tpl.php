<?php
/* Smarty version 4.3.4, created on 2024-01-17 18:20:18
  from '/var/www/blog_test/_templates/admin/edit_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a81a621e48f4_44328962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf34f7fd08a4dfe33d37001f10ca6922d09faab' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/edit_page.tpl',
      1 => 1705515615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a81a621e48f4_44328962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="../../node_modules/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<h2 align="center">Edit Category</h2>



        <form id="form1"  name="form1" method="post" action="admin_pages.php" class="edit_table post_form" style="">
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Title:&nbsp;&nbsp;</label>
            <input name="page[title]" type="text" id="page[title]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
" />
          </div>
          <div style="padding: 20px;">
            <label >Text:&nbsp;&nbsp;</label>
            <textarea id="page[text]" type="text" name="page[text]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->text;?>
" >
            </textarea>
          </div>
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Sort order:&nbsp;&nbsp;</label>
            <input name="page[sort_order]" type="text" id="page[sort_order]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->sort_order;?>
" />
          </div>
          <div style="padding: 20px">
            <label>Publish:</label>
            <input name="page[published]" type="checkbox" id="page[published]" value="1" style="" <?php if (($_smarty_tpl->tpl_vars['page']->value->published)) {?>checked="checked" <?php }?> />
          </div>
          <div style="padding: 20px">
            <input type="submit" name="Submit" class="button_blue" value="Submit"/>
            <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_pages.php'" />
            <input name="Action" type="hidden" id="Action" value="edit_page" />
          </div>
        </form>
        
        <?php echo '<script'; ?>
>
                CKEDITOR.replace( 'page[text]' );
        <?php echo '</script'; ?>
>

<p>&nbsp;</p>
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
