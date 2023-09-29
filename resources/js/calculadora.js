  $(document).ready(function(){
      $("#menu-toggle, #bloq-wrapper").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
      });
  });