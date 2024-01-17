$(document).ready(function () {
  console.log("document ready.");

  // toggling dropdown menu
  $("#navbarDropdownCategories").click(function () {
    $("#categories").toggle();
  });

  $("#navbarDropdownAlbums").click(function () {
    $("#albums").toggle();
  });

  $(".navbar-toggler").click(function () {
    $("#navbarSupportedContent").toggle();
  });
});
