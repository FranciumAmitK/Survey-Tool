$(document).ready(function() {

   $(".myform").submit(function(e) {
            //$("#success").html(i);
    e.preventDefault();
        //location.href = "../../../../../xampp/htdocs/PROJECT PHP/question/responsequestions.php";

    $.ajax({
      type: 'POST',
      url: 'responsequestions.php',
      data:  $('.myform').serialize(),
      success: function() {
        console.log("response taken");
      }, 
      error: function() {
        console.log("Unable to take response");
      }
    });
 

 });

  $("#showresponse").click(function(){
        location.href = "../../../../../PROJECT PHP/question/check.php";

  }); 
 



 
});