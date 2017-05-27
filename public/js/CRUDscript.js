$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
	$(document).on("click", ".deletePage", deletePage);
//	$(document).on("click", ".submitLesson", submit);
	$(".submitLesson").submit(function() {
		check_file_inputs();
		return validate();
	});
});

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014 FIXED NA PLESSSS" */
function addPage(){
	i = document.getElementsByClassName('page');
	$('#page0').clone().attr('id','page'+(i.length)).insertAfter('#page' + (i.length- 1));
	document.getElementById("page" + (i.length-1)).style.display = "block";
	node = document.getElementById("page" + (i.length-1));
	// console.log(node.lastChild.textContent);
	node.lastChild.firstChild.innerHTML = i.length-1;
	
}
// doesn't have to have a query since it won't be submitted int the first place - リン
function deletePage() {
	$(this).parent().parent().parent().remove();
	pages = document.getElementsByClassName("page");
	for(x=1;x<pages.length;x++){
		pages[x].id = "page" + x;
		pages[x].lastChild.firstChild.innerHTML = x;
	}
}

/* WHAT IS DIS BLSHT - AGENT P " ONE SPAGHETTI COMING UP"*/
function validate(){
	pagesContent = document.getElementsByName("page_content[]");
	pagesTitle = document.getElementsByName("page_title[]");
	warningContent = document.getElementsByName("warning_content[]");
	warningTitle = document.getElementsByName("warning_title[]");
	warningImage = document.getElementsByName("warning_image[]");
	imgFile = document.getElementsByName("image[]");
	var bool = true;

	for(i=1;i<pagesContent.length;i++){
		if(document.getElementById('lesson_title').value == ""){
			document.getElementById("warning_lesson_title").style.display = "block";
			bool = false;
		}
		else{
			document.getElementById("warning_lesson_title").style.display = "hidden";
		}
		if(imgFile[i].value != ""){
			fileType = imgFile[i].value.split('.').pop();
			console.log(fileType);
			if(fileType == "jpeg"||fileType == "png"||fileType =="jpg"){
				warningImage[i].style.display = "hidden";
			}
			else{
				bool = false;
				warningImage[i].style.display = "block";
			}
		}
		if(pagesContent[i].value == ""){
			bool = false;
			warningContent[i].style.display = "block";
		}
		else{
			warningContent[i].style.display = "none";
		}
	
		if(pagesTitle[i].value == ""){
			bool = false;
			warningTitle[i].style.display = "block";
		}
		else{
			warningTitle[i].style.display = "none";
		}
	}
	console.log(bool);
	return bool;
}

function check_file_inputs() {
	$("form > input:file[name='image\\[\\]']").each(function() {
		if ($(this).files.length === 0) {
			$(this).prev("input:disabled[type='hidden'][name='image\\[\\]']").prop("disabled", false);
			console.log("enabled");
		}
	});
}
