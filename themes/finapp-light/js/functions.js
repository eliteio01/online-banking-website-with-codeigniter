$( document ).ready( function () {
		$.fn.dataTable.moment( 'DD/MM/YY H:i' );
		$( '#example' ).DataTable( {		
			"order": [[ 0, "desc" ]],
			responsive: true
		} );
	} );
	
	
    $(document).ready(function () {
        $.fn.dataTable.moment( 'MM/DD/YYYY HH:mm' );
        $('#example1').DataTable({"order": [[ 1, "desc" ]]});
    });

	
new ClipboardJS( '.clip' );

new ClipboardJS('.clip_modal', {
    container: document.getElementById('alert')
});

function myCopy() {
		var x = document.getElementById( "showCopy" );
		if ( x.style.display === "none" ) {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
function myCopys() {
		var x = document.getElementById( "showCopys" );
		if ( x.style.display === "none" ) {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}

function password_show() {
    var x = document.getElementById( "pwd" );
    var show_eye = document.getElementById( "show" );
    var hide_eye = document.getElementById( "hide" );
    show_eye.classList.remove( "d-none" );
    if ( x.type === "text" ) {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    } else {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    }
  }
