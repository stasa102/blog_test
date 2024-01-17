<?php
include_once "../includes/inc.admin.php";

if (isset($_REQUEST['Action'])) {

    $Action = $_REQUEST['Action'];

    switch ($Action) {

        case "add_category":

            $category_arr = $_REQUEST['category'];
            var_dump($category_arr);

            if (empty($category_arr['name'])) {     //  name is required
                $message = "Name of category must be provided.";
                break;
            }

            if (!$category_arr['published']) $category_arr['published'] = "0";

            $category = Category::createFromArray($category_arr);
            $cat = $category->save();

            if ($cat) {
                $message = "Successfully saved.";
            } else {
                $message = "Failed to save.";
            }
            break;


        case "delete":

            $delete_ids = $_REQUEST['delete'];        // get ids to delete, array

            $num_deleted = Category::deleteIds($delete_ids);

            $message = "Successfully deleted $num_deleted item(s).";

            break;

        case "edit_category":

            $category_arr = $_REQUEST['category'];    // get associative array from form

            if (!$category_arr['published']) $category_arr['published'] = "0";            // checkbox not checked, set value

            if (empty($category_arr['name'])) {
                $message = "Username must be provided.";
                break;
            }

            $category = Category::fetch("id", $category_arr['id']);         // get category from database
            $category->updateFromArray($category_arr);                    // update with new data

            $cat = $category->save();

            if ($cat) {
                $message = "Successfully saved.";
            } else {
                $message = "Failed to save.";
            }
    }
}


$categories = Category::fetchAll();                // fetching all data from db table

$smarty->assign("categories", $categories);        // send OBJECT to template
$smarty->assign("message", $message);
$smarty->assign("selected", "category");
$smarty->display("admin/admin_categories.tpl");
