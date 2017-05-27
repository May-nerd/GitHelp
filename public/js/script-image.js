var files;

$(document).ready(function(){
	$('#changeImage').submit(function(event){
		event.preventDefault();
		files = event.target.files;
		var id = $(this).attr("data-page");
		var data = new FormData();
		console.log(data);

	});
})

function submit(){

	// var current = document.getElementsByClassname("imgUpload1");
	// var change = document.getElementsByClassname("imgUpload2");

	// for(var i = 0; i < current.length; i++){
	// 	// current[i].value = change[i].value;
	// 	console.log(current[i].value);
	// }
	console.log("Hello");

}

// $(function()
// {
// 	// Variable to store your files


	
// 	var files;
// 	// Add events
// 	$('input[type=file]').on('change', prepareUpload);
// 	$('form').on('submit', uploadFiles);

// 	// Grab the files and set them to our variable
// 	function prepareUpload(event)
// 	{
// 		id = $(this).attr("data-page");
// 		console.log(id);
// 		files = event.target.files;
// 	}

// 	// Catch the form submit and upload the files
// 	function uploadFiles(event)
// 	{
// 		event.stopPropagation(); // Stop stuff happening
//         event.preventDefault(); // Totally stop stuff happening

//         // START A LOADING SPINNER HERE

//         // Create a formdata object and add the files
// 		var data = new FormData();
// 		$.each(files, function(key, value)
// 		{
// 			data.append(key, value);
// 		});
// 		data.append('page_id', id);
// 		console.log(data);
        
//         $.ajax({
//             url: '/update/image',
//             type: 'POST',
//             data: data,
//             cache: false,
//             dataType: 'json',
//             processData: false, // Don't process the files
//             contentType: false, // Set content type to false as jQuery will tell the server its a query string request
//             success: function(data, textStatus, jqXHR)
//             {
//             	if(typeof data.error === 'undefined')
//             	{
//             		// Success so call function to process the form
//             		submitForm(event, data);
//             	}
//             	else
//             	{
//         //     		// Handle errors here
//             		console.log('ERRORS: ' + data.error);
//             	}
//             },
//             error: function(jqXHR, textStatus, errorThrown)
//             {
//             	console.log('ERRORS: ' + textStatus);
//             }
//         });
//     }

//     function submitForm(event, data)
// 	{
// 		// Create a jQuery object from the form
// 		$form = $(event.target);
		
// 		// Serialize the form data
// 		var formData = $form.serialize();
		
// 		// You should sterilise the file names
// 		$.each(data.files, function(key, value)
// 		{
// 			formData = formData + '&filenames[]=' + value;
// 		});

// 		$.ajax({
// 			url: 'submit.php',
//             type: 'POST',
//             data: formData,
//             cache: false,
//             dataType: 'json',
//             success: function(data, textStatus, jqXHR)
//             {
//             	if(typeof data.error === 'undefined')
//             	{
//             		// Success so call function to process the form
//             		console.log('SUCCESS: ' + data.success);
//             	}
//             	else
//             	{
//             		// Handle errors here
//             		console.log('ERRORS: ' + data.error);
//             	}
//             },
//             error: function(jqXHR, textStatus, errorThrown)
//             {
//             	// Handle errors here
//             	console.log('ERRORS: ' + textStatus);
//             },
//             complete: function()
//             {
//             	// STOP LOADING SPINNER
//             }
// 		});
// 	}
// });