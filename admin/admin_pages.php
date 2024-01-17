<?php

include_once "../includes/inc.admin.php";

if (isset($_REQUEST['Action'])) {

    $Action = $_REQUEST['Action'];

    switch ($Action) {

        case "add_page":

            $page_arr = $_REQUEST['page'];

            if (empty($page_arr['title'])) {     //  name is required
                $message = "Title of page must be provided.";
                break;
            }
            if (empty($page_arr['text'])) {     //  name is required
                $message = "Text of page must be provided.";
                break;
            }

            // if (!$page_arr['published']) $page_arr['published'] = "0";
            if ($page_arr['published'] == 1) $page_arr['time_published'] = NULL;
            // if ($page_arr['published'] !== 1) $page_arr['time_published'] = time();

            $page_arr['sort_order'] += 1; //??????


            $page = Page::createFromArray($page_arr);
            $pag = $page->save();

            if ($pag) {
                $message = "Successfully saved.";
            } else {
                $message = "Failed to save.";
            }
            break;

        case "delete":

            $delete_ids = $_REQUEST['delete'];        // get ids to delete, array

            $num_deleted = Page::deleteIds($delete_ids);

            $message = "Successfully deleted $num_deleted item(s).";

            break;

        case "edit_page":

            $page_arr = $_REQUEST['page'];    // get associative array from form

            if (!$page_arr['published']) $page_arr['published'] = "0";            // checkbox not checked, set value

            if (empty($page_arr['title'])) {
                $message = "Title cannot be empty.";
                break;
            }

            if (empty($page_arr['text'])) {
                $message = "Text field cannot be empty.";
                break;
            }


            $page = Page::fetch("id", $page_arr['id']);         // get page from database
            $page->updateFromArray($page_arr);                    // update with new data

            $pag = $page->save();

            if ($pag) {
                $message = "Successfully saved.";
            } else {
                $message = "Failed to save.";
            }
    }
}
$pages = Page::fetchAll();                // fetching all data from db table

$smarty->assign("pages", $pages);
$smarty->assign("selected", "pages");
$smarty->assign("message", $message);
$smarty->display("admin/admin_pages.tpl");
