window.addEventListener("load", function () {

  for (var i = 0; i < user.length; i++) {
    var update_button = document.getElementsByClassName(user[i].id);
    var cancel_button = document.getElementsByClassName("cancel");
    var form_store = document.getElementById("formstore");
    var form_update = document.getElementById("formupdate");
    var form_update_name = document.getElementsByName("nnome");
    var form_update_email = document.getElementsByName("nemail");
    var form_update_bio = document.getElementsByName("nbio");


    update_button[i].addEventListener("click", function(){
      form_update_name[1].placeholder = user[i].nome;
      form_update_email[1].placeholder = user[i].email;
      form_update_bio[1].placeholder = user[i].bio;

      form_store.style.display = "none";
      form_update.style.display = "block";
    });

    cancel_button[0].addEventListener("click", function(){
      form_update.style.display = "none";
      form_store.style.display = "block";
    });
  }

});
