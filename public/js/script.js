$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
	$(document).on("click", ".deletePage", deletePage);
});

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014" */
function addPage(){

	i = document.getElementsByClassName('page');
	$('#page0').clone().attr('id','page'+(i.length)).insertAfter('#page' + (i.length-1));
	document.getElementById("page" + (i.length-1)).style.display = "block";
	page_numbers = document.getElementsByName("pageNumber");
	page_numbers[i.length-1].innerHTML = i.length-1;
}
function deletePage() {
	page = document.getElementsByClassName('page');

	console.log("delete");


	// $(this).parent().parent().parent().parent().remove();

}