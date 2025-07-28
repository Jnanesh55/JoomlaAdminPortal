function toggleProfileMenu() {
  var menu = document.getElementById("profile-menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

document.addEventListener("click", function(event) {
  var isClickInside = document.getElementById("profile-container").contains(event.target);
  if (!isClickInside) {
    document.getElementById("profile-menu").style.display = "none";
  }
});

