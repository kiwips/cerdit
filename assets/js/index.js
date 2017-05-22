
function openMenu() {
  $(".container-fluid").css('margin-left','25%');
  var style = {
  	width : '25%',
  	height : '45%',
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
