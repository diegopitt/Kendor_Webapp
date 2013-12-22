$('#previewButton').bind("click tap", function() {
	var url = 'api/getDoor.php';
	$.ajax({
		type: "GET",
		url: url,
		data: {doorDir:$("#doorDir").attr("src")},
        success: function (data) {
			if (data != 'false') {
				//alert("Directing you to the door");
				$.mobile.changePage("../Doors/" + data + "/dz.html");
			}  else {
				alert('Unable to find a preview for this door. Please try again.');
			}
		},
		complete: function (xhr, status) {
		    if (status === 'error' || !xhr.responseText) {
		        handleError();
		    }
		    else {
		        var data = xhr.responseText;
		        //...
		    }
		}
	});
	return false;
});