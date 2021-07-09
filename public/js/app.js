window.addEventListener("load", function () {
  var form_store = document.getElementById("formstore");
  var form_update = document.getElementById("formupdate");
  var cancel_button = document.getElementsByClassName("cancel");

  for (var i = 0; i < user.length; i++) {
    $("." + user[i].id).click(function(){

      var values = (jQuery(this).attr("value").split(","));
      var form_update_action = document.getElementById("update-form");
      var form_update_nome = document.getElementById("update-nome");
      var form_update_email = document.getElementById("update-email");
      var form_update_bio = document.getElementById("update-bio");

      $('#update-form').attr("action", "http:\/\/laravel-user-crud.herokuapp.com\/" +  parseInt(values[0]))
      form_update_nome.value = values[1];
      form_update_email.value = values[2];
      form_update_bio.value = values[3];

      form_store.style.display = "none";
      form_update.style.display = "block";
    });
  }
    cancel_button[0].addEventListener("click", function(){
      form_update.style.display = "none";
      form_store.style.display = "block";
    });
});
