$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
});

/* Added By AgentProxy */
function addPage(){

	i = document.getElementsByClassName('page');

	$('#page1').clone().attr('id','page'+(i.length+1)).insertAfter('#page' + i.length);
	page_numbers = document.getElementsByName("pageNumber");
	page_numbers[i.length-1].innerHTML = i.length;
		// page_numbers[2].innerHTML = i.length+1;

}