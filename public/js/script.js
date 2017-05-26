$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
});

/* Added By AgentProxy */
function addPage(){

	i = document.getElementsByClassName('page');

	$('#page1').clone().attr('id','page'+(i.length+1)).insertAfter('#page' + i.length);

	console.log("page"+i.length);
}