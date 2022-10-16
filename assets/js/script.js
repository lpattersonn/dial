(function ($) {
  $(document).ready(function () {
    console.log("script.js loaded");

    if ($(window).width() <= 1000) {
      $(".mobile-menu").show();
    } else {
      $(".mobile-menu").hide();
    }

    $(window).resize(function () {
      if ($(window).width() <= 1000) {
        $(".mobile-menu").show();
      } else {
        $(".mobile-menu").hide();
      }
    });

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
