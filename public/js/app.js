window.addEventListener("load", function () {

  for (var i = 0; i < user.length; i++) {
    var form_store = document.getElementById("formstore");
    var form_update = document.getElementById(user[i].id);
    var cancel_button = document.getElementsByClassName("cancel");



    $('.update-button').click(function(){
      form_store.style.display = "none";
      form_update.style.display = "block";
    });

    $('.cancel-button').click(function(){
      form_update.style.display = "none";
      form_store.style.display = "block";
    });
  }

});
