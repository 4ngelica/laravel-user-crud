window.addEventListener("load", function () {
  var form_store = document.getElementById("formstore");
  var form_update = document.getElementById("formupdate");
  var cancel_button = document.getElementsByClassName("cancel");

  for (var i = 0; i < user.length; i++) {
    $("." + user[i].id).click(function(){
      //value=[id,nome,email,bio]
      // console.log(jQuery(this).attr("value")).explode(" ");
      // form_update.placeholder = user[(jQuery(this).attr("value"))].nome;
      var values = (jQuery(this).attr("value").split(","));
      var form_update_nome = document.getElementById("update-nome");
      var form_update_email = document.getElementById("update-email");
      var form_update_bio = document.getElementById("update-bio");

      form_update_nome.placeholder = values[1];
      form_update_email.placeholder = values[2];
      form_update_bio.placeholder = values[3];

      form_store.style.display = "none";
      form_update.style.display = "block";
    });
}
  cancel_button[0].addEventListener("click", function(){
    form_update.style.display = "none";
    form_store.style.display = "block";
  });
});
