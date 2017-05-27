$(document).ready(function(){
	$(document).on("click", ".addPage", addPage);
	$(document).on("click", ".deletePage", deletePage);
//	$(document).on("click", ".submitLesson", submit);
	$("#lesson_form").submit(function() {
		return true;//validate();
	});
});

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014 FIXED NA PLESSSS" */
function addPage(){
	var pages = $("#lesson_form .page").length;
	var page = $("#page_template").clone().removeAttr("id").show();
	$("input.file_upload", page).attr("name", "image-" + pages);
	$("label.pageNum", page).html(pages + 1);
	$(page).insertAfter($("#lesson_form .page").last());
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

// I'm allergic to bullshit
function validate(){
	var pages = $("#lesson_form .page");
	var passed = true;

	// lesson title
	if ($("#lesson_title").val() === "") {
		$("#warning_lesson_title").show();
		passed = false;
	} else {
		$("#warning_lesson_title").hide();
	}

	$(pages).each(function() {
		// image extension
		if ($(".file_upload", this).val() !== "") {
			var ext = $(".file_upload", this).val().split(".").pop().toLowerCase();
			if (["jpeg", "jpg", "png"].indexOf(ext) === -1) {
				$(".warning_image", this).show();
				passed = false;
			} else {
				$(".warning_image", this).hide();
			}
		}

		// page title
		if ($("input[name='page_title\\[\\]']", this).val() === "") {
			$(".warning_title", this).show();
			passed = false;
		} else {
			$(".warning_title", this).hide();
		}

		// page content
		if ($("textarea[name='page_content\\[\\]']", this).val() === "") {
			$(".warning_content", this).show();
			passed = false;
		} else {
			$(".warning_content", this).hide();
		}
	});

	return passed;
}
