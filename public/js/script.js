$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
	$(document).on("click", ".deletePage", deletePage);
});

/* Added By AgentProxy */
function addPage(){

	i = document.getElementsByClassName('page');

	$('#page1').clone().attr('id','page'+(i.length+1)).insertAfter('#page' + i.length);

	console.log("page"+i.length);
}

function deletePage() {
	page = document.getElementsByClassName('page');

	console.log("delete");


	// $(this).parent().parent().parent().parent().remove();

}