
function openMenu() {
  var style = {
     margin : '-19px 0px 0px 0px',
  	width : '17.3%',
  	height : '55%',
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
