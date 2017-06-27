$(document).ready(function(){
$("#homebutton").click( function() { 
	console.log('entered');
    location.href = "homepage.php";
    });

//  var boxWidth = $("#container").width();

$("#start").click(function(){
	   location.href = "question/free.php";
    return false;
});

$('body').on('click', '.add', function () {
    $('.block:last').before(' <div class="block"><input type="text" /><span class="remove">Remove Option</span></div>');
});

$('body').on('click', '.remove', function () {
    $(this).parent('.block').remove();

});



$("#free").click(function() {
    
     $("#freequestions").show();
          //	  $('#freequestions:last').before(' <div class="block"><input type="text" /> <span class="remove">Remove Option</span></div><div class="block"> <span class="add">Add Option</span></div>');
   //$('#freequestion:last').before('<div id="questions"><div class="block"><input type="text" /> <span class="remove">Remove Option</span></div><div class="block">                                  <input type="text" /> <span class="remove">Remove Option</span>                                </div>                                <div class="block"> <span class="add">Add Option</span>                                      </div>    </div>');
    });

/*
$("#prime").click(function(){
           //$("#primequestions").show();
          //	  $('#freequestions:last').before(' <div class="block"><input type="text" /> <span class="remove">Remove Option</span></div><div class="block"> <span class="add">Add Option</span></div>');
   $('#freequestions:last').before('<div id="questions"><div class="block"><input type="text" /> <span class="remove">Remove Option</span></div><div class="block">                                  <input type="text" /> <span class="remove">Remove Option</span>                                </div>                                <div class="block"> <span class="add">Add Option</span>                                      </div>    </div>');
 });
 
 
 
$("#submit").submit(function() {
  return false;
 });
$("#myform :input").each( function() {
     $(this).val('');
  });*/
});