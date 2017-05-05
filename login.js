 $("#login").click(function () {
     $("#login").click(function () {
         username = $("#name").val();
         password = $("#pwd").val();
         $.ajax({
             type: "POST",
             url: "login.php",
             data: $("#login_form").serialize(),
             success: function (data) {
                 window.location = "welcome.php";
             }
         });
         return false;
     });
 });
