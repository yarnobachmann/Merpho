

  if(window.location.href.indexOf("/projecten") > -1) {
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
    });
  }

  if(window.location.href.indexOf("/webdesign") > -1) {
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
    });
  }

  if(window.location.href.indexOf("/fotografie") > -1) {
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
    });
  }

  if(window.location.href.indexOf("/team") > -1) {
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
    });
  }

  if(window.location.href.indexOf("/contact") > -1) {
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
    });
  }




if($('.overlay').css('width') == '100%'){
  $('#nav-icon').addClass('open');
};
  function openNav() {
   var x = document.getElementById("myNav");
   if (x.style.width === "100%") {
       x.style.width = "0%";
   } else {
       x.style.width = "100%";
   }
  }
