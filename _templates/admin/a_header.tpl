<!DOCTYPE html>
<html>
  <head>
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../css/admin.css" rel="stylesheet" media="screen">
    <script src="../js/vendor/jquery-3.3.1.min.js" type="text/javascript"></script>
    {* <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script> *}

    
  </head>
<body>

<header class="a_header">
   <div class="a_message" align="center">
        <span id="message" class="message" align="center">{$message}</span>
    </div>
   <div class="header_box" style="float:right;"><input type="button" name="Button" class="button_red" value="Logout" onclick="self.location='login.php?logout=1'"/></div>
   <div class="header_box"><span class="site_name">SITE_NAME </span>/ <a href="admin.php">Admin Panel</a></div>
   <div style="clear:both;"></div>
</header>


<div id="MainAdminNav">
<ul id="MainAdminNavItems">
  	{if ($logged_user->getAdmin())}              {* only available to admin users  <--- smarty comment *}
  	   <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_users.php">Admin panel users </a></li>
       <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_categories.php">Categories </a></li>
       <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_posts.php">Posts </a></li>
       <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_pages.php">Pages </a></li>
       <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_slider_image.php">Slider Image </a></li>
       <li><a {if ($selected=="users")}style="background-color:#fff; color:#000;"{/if} href="admin_gallery_album.php">Gallery Album </a></li>
    {/if}
    <br style="clear: left;" />
  </ul>
</div>

<div style="margin-bottom:40px;"></div>


<!-- page body starts below --> 