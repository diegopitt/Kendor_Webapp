$(function () {
	$.ajax({ url: './Doors/imgListing.php',
	         type: 'post',
	         success: function(output) {
		         	var array = output.split(',');
		         	var imgHtml = '<ul class="galleryList">';
		         	array.forEach(function(item){
		         		if (item != ''){
			         		imgHtml += '<a href=\"./Doors/' + item + '/dz.html' + '\"><li><img src=\"' + './Doors/' + item + '/door.jpg \"/></li></a>'; 
			         	}
		         	});
		         	imgHtml += '</ul>';
	              $('#images').html(imgHtml);
	          }
	      });
});