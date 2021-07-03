window.addEventListener("load", function () {
  var form_store = document.getElementById("formstore");
  var form_update = document.getElementById("formupdate");
  var cancel_button = document.getElementsByClassName("cancel");

  for (var i = 0; i < user.length; i++) {
    $("." + user[i].id).click(function(){
      console.log(jQuery(this).attr("value"));
      form_store.style.display = "none";
      form_update.style.display = "block";
    });
}
  cancel_button[0].addEventListener("click", function(){
    form_update.style.display = "none";
    form_store.style.display = "block";
  });
});
