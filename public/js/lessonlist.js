$(document).ready(function(){
	// var lessonId = 1;
	// $(document).on("click", ".main-tags button", showSubTags);
	// goToTags(lessonId);
	// alert("hello");
});

function showSubTags(){
	var lessonId = 1;
	if(this.id == 'math'){
		goToTags(lessonId);
	}
	
	else if(this.id == 'science'){
		lessonId = 3;
		goToTags(lessonId);
	}
	
	else if(this.id == 'language'){
		lessonId = 4;
		goToTags(lessonId);
	}
	
	else if(this.id == 'mapeh'){
		lessonId = 2;
		goToTags(lessonId);
	}
	
	else if(this.id == 'programming'){
		lessonId = 5;
		goToTags(lessonId);
	}
	
	

	// 	success:function(data){
	// 		var like_count = data.length;

	// 		$("#like-count-"+post_id).html(like_count+" likes");

	// 		var likers = "";
	// 		$.each(data, function(key, value){
	// 			likers += "<div><a href='/profile/"+value['username']+"'>"+value['name']+"</a></div>";
	// 		});
	// 		$("#myModal_"+post_id+" .modal-body").html(likers);
	// 	}
	// });
}

function goToTags(lessonId){
	var color;
	if(lessonId == 1)
		color = 'mathPage';
	
	else if(lessonId == 2)
		color = 'mapehPage';

	else if(lessonId == 3)
		color = 'sciencePage'

	else if(lessonId == 4)
		color = 'languagePage';

	else if(lessonId == 5)
		color = 'programmingPage';

	$.ajax({
		url: '/home/'+lessonId,
		type: 'GET',
		// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		success: function(data){
			var tagnames = "";
			console.log(data);
			$.each(data, function (key, value){
				tagnames += "<div class='col-md-3 col-lg-3 col-xs-3 col-sm-3 "+color+"'>"+
				"<a href='tags/"+value['name']+"/"+value['tagname']+"'"+ value['id'] +">"+value['tagname'] + "("+value['count']+
				")"+"</a></div>";
			});
			$('#tagsPage').html(tagnames);
		}
	});
}