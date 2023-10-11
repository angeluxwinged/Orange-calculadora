  $(document).ready(function(){
      $("#menu-toggle, #bloq-wrapper").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
      });
  });

  $(document).ready(function () {
      var columns = $('.container-medicina .col-md-offset-2');
      
      columns.sort(function (a, b) {
          var textA = $(a).find('p').text().toUpperCase();
          var textB = $(b).find('p').text().toUpperCase();
          return textA.localeCompare(textB);
      });
      
      $('.container-medicina .row').html(columns);
  });