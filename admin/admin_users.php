<?php

include_once "../includes/inc.admin.php";
//-- authorisation over, content starts 

if (isset($_REQUEST['Action'])) {

	$Action = $_REQUEST['Action'];

	switch ($Action) {

		case "edit_user":
			$user_arr = $_REQUEST['user'];	// get associative array from form
			//$user=(object) $user_arr;		// type cast: associative array to object
			//var_dump($user_arr);
			if (!$user_arr['admin']) $user_arr['admin'] = "0";			// checkbox not checked, set value

			if (empty($user_arr['username'])) {
				$message = "Username must be provided.";
				break;
			}

			if ($user_arr['password'] == $user_arr['password2']) { // if passwords match (or both empty)

				if (isset($user_arr['password']) && !empty($user_arr['password'])) {
					$user_arr['password'] = sha1($user_arr['password']);
				} else {
					unset($user_arr['password']);
				}

				$user = User::fetch("id", $user_arr['id']); 		// get user from database
				$user->updateFromArray($user_arr);					// update with new data

				//$user->password = sha1($user->password);

				$num = $user->save();

				if ($num) {
					$message = "Successfully saved.";
				} else {
					$message = "Failed to save.";
				}
			} else {
				$message = "Passwords do not match. Please try again.";
			}

			break;
		case "add_user":

			$user_arr = $_REQUEST['user'];	// get associative array from form

			if (!$user_arr['admin']) $user_arr['admin'] = "0";			// checkbox not checked, set value

			if (empty($user_arr['username'])) {
				$message = "Username must be provided.";
				break;
			}

			if ($user_arr['password'] == $user_arr['password2']) { // if passwords match (or both empty)

				$user = User::createFromArray($user_arr);
				$user->password = sha1($user->password);
				$num = $user->save();

				if ($num) {
					$message = "Successfully saved.";
				} else {
					$message = "Failed to save.";
				}
			} else {
				$message = "Passwords do not match. Please try again.";
			}

			break;

		case "delete":

			$delete_ids = $_REQUEST['delete'];		// get ids to delete, array

			$num_deleted = User::deleteIds($delete_ids);

			$message = "Successfully deleted $num_deleted item(s).";

			break;
	}
}



//---- GET ALL USERS - 

$users = User::fetchAll();

//var_dump($users);


$smarty->assign("users", $users);		// send OBJECT to template
$smarty->assign("message", $message);
$smarty->assign("selected", "users");
$smarty->display("admin/admin_users.tpl");
