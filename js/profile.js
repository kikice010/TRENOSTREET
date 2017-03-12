$( ".modify-course" ).on( "click", function() {
		$('.save-course').show();
		$('.modify-course').hide();
  var id = $( this)[0].id;
   var courseItem = $("."+ id + "Item");
        courseItem.find('.itemLabel').hide();
        courseItem.find('.itemInput').show().focus();
});

$( ".save-course" ).on( "click", function() {
	$('.modify-course').show();
$('.save-course').hide();
  var id = $( this)[0].id;
   var courseItem = $("."+ id + "Item");
        courseItem.find('.itemInput').hide();
        courseItem.find('.itemLabel').show().focus();
        //ajax call to save data
});