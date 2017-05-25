$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
});


function addPage(){

	i = document.getElementsByClassName('page');

	//$("<br/>").appendTo('.page');
	$('#page1').clone().attr('id','page'+(i.length+1)).appendTo('#page' + i.length);
	//var new_page = $('.page').clone();

	console.log("page"+i.length);
}