// $(document).ready(function() {
//   console.log("ready!");

  // toggle Hamgburger menu
  $("span#hamburger").click(function() {
    console.log("click");
    toggleHamburger();
  });

  function toggleHamburger() {
    var menu = document.getElementById("navbarNavAltMarkup");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  };

  $("#navbarNavAltMarkup").on("click", function() {
    $("a.nav-link").click(function() {
      $("#navbarNavAltMarkup").css("display", "none");
    });
  });