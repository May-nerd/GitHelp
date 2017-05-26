var pagelinks = document.querySelectorAll('.page_link');

for(i=0; i<pagelinks.length; i++){
	addEventListenerToLinks(i);
}

function addEventListenerToLinks(index){
	pagelinks[index].addEventListener("click", showPage);
}


function showPage(){
	var post_id = $(this).attr("data-pg");
	var page_number = this.id;
	var lesson = document.getElementById("lesson_id").value;
	console.log("lesson: " +  lesson);
	console.log("page: " +  page_number);

	$.ajax({
		url: "/getlessons/"+ lesson + "/" + page_number,
		type: "get",
		success:function(data){
			console.log(data);
			document.getElementById("lesson_title").innerHTML = data[0]["title"];
			document.getElementById("lesson_content").innerHTML = data[0]["content"];
		}
	});
}