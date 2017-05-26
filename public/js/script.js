$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
	$(document).on("click", ".deletePage", deletePage);
});

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014 FIXED NA PLESSSS" */
function addPage(){

	i = document.getElementsByClassName('page');
	$('#page0').clone().attr('id','page'+(i.length)).insertAfter('#page' + (i.length- 1));
	document.getElementById("page" + (i.length-1)).style.display = "block";
	node = document.getElementById("page" + (i.length-1));
	node.lastChild.previousSibling.previousSibling.firstChild.innerHTML = i.length-1;
	
}
// doesn't have to have a query since it won't be submitted int the first place - リン
function deletePage() {

	$(this).parent().parent().parent().remove();
	// document.getElementById("page" + (i.length-1)).style.display = "block";
	pages = document.getElementsByClassName("page");
	// page_numbers = document.getElementsByName("pageNumber");

	for(x=1;x<pages.length;x++){
		pages[x].id = "page" + x;
		pages[x].lastChild.previousSibling.previousSibling.firstChild.innerHTML = x;
		// pages[x].innerHTML = x;
	}

	
	// page_numbers[i.length-1].innerHTML = i.length-1;
}