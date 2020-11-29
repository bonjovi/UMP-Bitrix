$(function() {
  $("#loader").hide();
  $("form#feedbackform").submit(function(e) {

        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var producttype = $("#producttype").val();
        var city = $("#customcity").val();
        var phone = $("#customphone").val();

        var data = 'name=' + name + '&email=' + email + '&message=' + message + '&producttype=' + producttype + '&city=' + city + '&phone=' + phone;
    
        if(data) {
            $.ajax({
                type: "POST",
                url: "/blackfriday/send.php",
                data: data,
                beforeSend: function(html) {
          $("#loader").show();
          $("#submit").hide();
               },
               success: function(html){
          $("#loader").hide();          
          $("#result").fadeIn().html(html);
              }
            });
        }
        return false;
    });
});
