$(document).ready(function() {

   $(".myform").submit(function(e) {
            //$("#success").html(i);

    e.preventDefault();
        //location.href = "../../../../../xampp/htdocs/PROJECT PHP/question/responsequestions.php";

    $.ajax({
      type: 'POST',
      url: 'responsequestions.php',
      data: $('.myform').serialize(),
      success: function() {
        console.log("response taken");
      }, //You missed this
      error: function() {
        console.log("Signup was unsuccessful");
      }
    });
 // $('#reset').trigger('click');// trigger the click on second, and go on 
 //  i++;
         //  $('.myform').reset();
         //clearInput();
  }); 

});