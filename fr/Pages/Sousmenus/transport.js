$(document).ready(function(){
  $(".accordian").click(function() {
    $(this).nextAll(".content:first").slideToggle("fast");
    $(this).find(".accordian-arrow").toggleClass("less");
  });
});
