function changeTab(clickedTab) {
  // Remove the "active" class from all tabs
  var tabsLinks = document.querySelectorAll(".tabs-links");
  tabsLinks.forEach(function (tab) {
    tab.classList.remove("active");
  });

  // Add the "active" class to the clicked tab
  clickedTab.classList.add("active");
}
