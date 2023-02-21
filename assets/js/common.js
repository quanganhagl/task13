$(document).ready(function () {
  $(".js-slider").bxSlider({
    infiniteLoop: true,
    pager: false,
    auto: true,
  });

  $(".js-imglink").each(function () {
    var src_no = $(this).attr("src");
    var src_on = src_no.replace("_no.", "_on.");
    $(this).mouseover(function () {
      $(this).attr("src", src_on);
    });
    $(this).mouseout(function () {
      $(this).attr("src", src_no);
    });
  });
});

//make link active

$(document).ready(function () {
  // get the current page
  var current = location.pathname.slice(12).replace("/", "");

  // loop through all the links
  $(".c-gnav li").each(function () {
    var $this = $(this);
    $this.click(function () {});
    // remove the class active
    $(this).removeClass("active");
    // check if this link is the current path
    if ($(this).attr("class") == current) {
      // if it is, add the class active
      $(this).closest("li").addClass("active");
    }
  });
});
