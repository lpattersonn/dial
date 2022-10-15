(function ($) {
  $(document).ready(function () {
    console.log("script.js loaded");

    $(".mobile-menu-flyout").hide();

    $("#menu-open").click(function () {
      $(".mobile-menu-flyout").animate({
        width: "toggle",
      });
      $("html,body").css("position", "fixed");
    });

    $("#menu-close").click(function () {
      $(".mobile-menu-flyout").animate({
        width: "toggle",
      });
      $("html,body").css("position", "relative");
    });
  });
})(jQuery);
