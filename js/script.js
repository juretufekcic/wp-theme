jQuery(document).ready(function($) {
  $(".navbar-button").click(function() {
    $(".menu-top-menu-container").toggleClass("active");
    $(".navbar-button").toggleClass("close");
    $("body").toggleClass("no-scroll");

    // Menu Item Toggle Delay
    $(".menu-item").each(function(i) {
      var elm = $(this);
      setTimeout(function() {
        elm.toggleClass("show");
      }, i * 200);
    });
  });

  $(".preloader")
    .delay(500)
    .fadeOut(400);

  $("#site-content").addClass("loaded");
  $(".description > p").addClass("h5");
  $(".post-excerpt > p").addClass("h1");
});
