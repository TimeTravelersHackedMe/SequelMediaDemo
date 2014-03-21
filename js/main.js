$(document).ready(function() {
	// Opens lightbox when an image is clicked
    $('img.grid-entity').click( function () {
		$('img#lightbox-image').attr("src", $(this).attr("src"));
        $('#lightbox-background').fadeIn(400);
		$('#image-container').fadeIn(800);
    });

    // Closes lightbox when user clicks anywhere
    $('#image-container').click( function () {
        $('#image-container').hide("slow");
		$('#lightbox-background').fadeOut(400);
    });
});
