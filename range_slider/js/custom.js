
/*$(document).ready(function(){
  $('.nav>li>a').on('click',function(){
    $(this).parent().addClass('active');
  });

  //this need to remove later
  var pageTitle = window.location.pathname.replace(/^.*\/([^/]*)/, "$1");
	$('.nav li a').each(function () {
      if ($(this).attr('href').toLowerCase() == pageTitle.toLocaleLowerCase())
          $(this).parent().addClass('active');
  }); //up to here

});*/
$(document).ready(function(){
  $('a.showphone').on('click',function(){
    $('.slidewrapper').toggle("slide", {direction: "right" }, 500);
  });

  $('a.show_office_pin').on('click',function(){
    $('a.show_office_pin').next('span').removeClass('active');
    $(this).next('span').fadeToggle(1000).css('display', 'block');
    return false;
  });

  $('a.show_office_pin').on('click',function(){
    $('.state_map div').removeClass('active');
    var a = $(this).attr('href');
    $(a).addClass('active');
  	return false;
  });

});


function updateTextInput() {



	var value1 = Number(document.getElementById("range").value);
    var value2 = "",
        slide_1 = $('.item_1'),
        slide_2 = $('.item_2'),
        slide_3 = $('.item_3'),
        slide_4 = $('.item_4'),
        slide_5 = $('.item_5');

    if ( value1 === 0 ) {
        value2 = "Value 0";
        slide_1.addClass('active');
        slide_2.removeClass('active');
        slide_3.removeClass('active');
        slide_4.removeClass('active');

        // Insert more code here for what you intend to do
    }
    else if ( value1 === 1 ) {
        value2 = "Value 1";
        slide_2.addClass('active');
        slide_1.removeClass('active');
        slide_3.removeClass('active');
        slide_4.removeClass('active');
        // Insert more code here for what you intend to do
    }
    else if ( value1 === 2 ) {
        value2 = "Value 2";
        slide_3.addClass('active');
        slide_1.removeClass('active');
        slide_2.removeClass('active');
        slide_4.removeClass('active');

        // Insert more code here for what you intend to do
    }
    else if ( value1 === 3 ) {
        value2 = "Value 3";
        slide_4.addClass('active');
        slide_1.removeClass('active');
        slide_2.removeClass('active');
        slide_3.removeClass('active');
        // Insert more code here for what you intend to do
    }
    else if ( value1 === 4 ) {
        value2 = "Value 4";
        slide_5.addClass('active');
        slide_1.removeClass('active');
        slide_2.removeClass('active');
        slide_3.removeClass('active');
        slide_4.removeClass('active');

        // Insert more code here for what you intend to do
    }

	document.getElementById('value2').innerHTML = value2;



}
