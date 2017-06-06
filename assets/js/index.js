$(document).ready(function(){
   $('body').contextmenu(function(){
     return false;
   });

   $(document).keydown(function(e) {
     if(e.keyCode==123){
       return false;
     }
   });
});


function openMenu() {
  var style = {
   margin : '-19px 0px 0px 0px',
   width : '17.3%',
   height : '49%',
   display : 'block',
 }
 $("#mySidebar").css(style);
}

function closeMenu() {
  $(".container-fluid").css('margin-left','0');
  var style = {
  	width : '0',
  	height : '0',
  	display : 'none',
  }
  $("#mySidebar").css(style);
}
