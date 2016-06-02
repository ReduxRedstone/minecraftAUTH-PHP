function login() {
  var username = $("#userEmail").val();
  var password = $("#userPassword").val();
  $.post('login.php',{username:username,password:password},
    function(data) {
        $(".output").html(data);
    });
}