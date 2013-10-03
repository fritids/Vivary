(function(){

  $(window).scroll(function () {
    var yPos = $(window).scrollTop();
    if(yPos < 300) {
      $(".site-header").removeClass("fixed-site-header");
      $(".slider img").css({"top" : yPos / 1.5 + "px"});
    } else {
      $(".site-header").addClass("fixed-site-header");
    }
  });

  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

})();