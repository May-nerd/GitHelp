$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
});

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014 FIXED NA PLESSSS" */
function addPage(){

	i = document.getElementsByClassName('page');
	$('#page0').clone().attr('id','page'+(i.length)).insertAfter('#page' + (i.length-1));
	document.getElementById("page" + (i.length-1)).style.display = "block";
	page_numbers = document.getElementsByName("pageNumber");
	page_numbers[i.length-1].innerHTML = i.length-1;

}