var i=2;



$(document).ready(function() {
/*call();
function call() {
  if (i<=3) {
    
         $(".myform").submit(function(e) {
            $("#success").html(i);
            i++;

    e.preventDefault();
                  $.ajax({
      type: 'POST',
      url: 'freequestion.php',
      data: $('.myform').serialize(),
      success: function() {
        console.log("Signup was successful");
      }, //You missed this
      error: function() {
        console.log("Signup was unsuccessful");
      }
                    });
         //call();
         //  $('.myform').reset();
         //clearInput();
  }); 
         call();
        }
}*/
//if (i==0) {
//for (var i = 0; i <= 2; i++) {
  
   //i++;

  
var btn = document.getElementById('preview');
btn.addEventListener('click', function() {
  document.location.href = 'response.php';
});













  
   $(".myform").submit(function(e) {
            $("#success").html(i);

    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'freequestion.php',
      data: $('.myform').serialize(),
      success: function() {
        console.log("Data Entered successfully");
      }, //You missed this 
      
      error: function() {
        console.log("Cant send data");
      }
    });
  $('#reset').trigger('click');// trigger the click on second, and go on 
   
   if(i==3){
        $("#submit").hide();
        $("#preview").show();
        
   }
   else{
         i++;
   }
         //  $('.myform').reset();
         //clearInput();
  }); 
 //}
//}


$("#homebutton").click( function() { 
	console.log('entered');
    location.href = "../../../../../PROJECT PHP/homepage.php";
    });


/*

function clearInput() {
  $(".myForm : input").each( function() {
     $(this).val('');

  });
}








$("#preview").submit(function() {

    $.ajax({
      type: 'POST',
      url: 'newview.php',
      //data: $('.myform').serialize(),
      success: function() {
        console.log("i m here");
      }, //You missed this
      error: function() {
        console.log("Signup was unsuccessful");
      }
    });
   }); 
*/

});