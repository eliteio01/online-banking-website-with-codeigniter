	
	$( 'textarea#summernote' ).summernote( {
		placeholder: '',
		tabsize: 3,
		height: 400,
		width: "100%",
		toolbar: [
			[ 'style', [ 'style' ] ],
			[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear' ] ],
			['fontname', ['fontname']],
			[ 'fontsize', [ 'fontsize' ] ],
			[ 'color', [ 'color' ] ],
			[ 'para', [ 'ul', 'ol', 'paragraph' ] ],
			[ 'height', [ 'height' ] ],
			[ 'table', [ 'table' ] ],
			[ 'insert', [ 'link', 'picture', 'video' ] ],
			[ 'view', [ 'fullscreen', 'codeview' ] ],
			//[ 'help', [ 'help' ] ]
		],
	} );