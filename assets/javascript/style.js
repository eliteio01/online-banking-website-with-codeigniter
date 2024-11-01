function showDiv( select ) {

		if ( select.value == 'dark' ) {
			document.getElementById( 'darkMode' ).style.display = "block";
			document.getElementById( 'lightMode' ).style.display = "none";
		} else if ( select.value == 'skin' ) {
			document.getElementById( 'darkMode' ).style.display = "none";
			document.getElementById( 'lightMode' ).style.display = "block";
		} else {
			document.getElementById( 'lightMode' ).style.display = "none";
			document.getElementById( 'darkMode' ).style.display = "none";
		}

	}

function showDivs( select ) {

		if ( select.value == 'dark-theme-gold.css' ) {
			document.getElementById( 'darkGold' ).style.display = "block";
			document.getElementById( 'darkRed' ).style.display = "none";
			document.getElementById( 'darkGreen' ).style.display = "none";
			document.getElementById( 'darkPurple' ).style.display = "none";
			document.getElementById( 'Default' ).style.display = "none";
			
		} else if ( select.value == 'dark-theme-green.css' ) {
			document.getElementById( 'darkGold' ).style.display = "none";
			document.getElementById( 'darkRed' ).style.display = "none";
			document.getElementById( 'darkGreen' ).style.display = "block";
			document.getElementById( 'darkPurple' ).style.display = "none";
			document.getElementById( 'Default' ).style.display = "none";
			
		} else if ( select.value == 'dark-theme-red.css' ) {
			document.getElementById( 'darkGold' ).style.display = "none";
			document.getElementById( 'darkRed' ).style.display = "block";
			document.getElementById( 'darkGreen' ).style.display = "none";
			document.getElementById( 'darkPurple' ).style.display = "none";
			document.getElementById( 'Default' ).style.display = "none";
			
		} else if ( select.value == 'dark-theme-purple.css' ) {
			document.getElementById( 'darkGold' ).style.display = "none";
			document.getElementById( 'darkRed' ).style.display = "none";
			document.getElementById( 'darkGreen' ).style.display = "none";
			document.getElementById( 'darkPurple' ).style.display = "block";	
			document.getElementById( 'Default' ).style.display = "none";
			
		} else if ( select.value == 'theme-dark.min.css' ) {
			document.getElementById( 'Default' ).style.display = "block";
			document.getElementById( 'darkGold' ).style.display = "none";
			document.getElementById( 'darkRed' ).style.display = "none";
			document.getElementById( 'darkGreen' ).style.display = "none";
			document.getElementById( 'darkPurple' ).style.display = "none";	
			
		} else {
			document.getElementById( 'darkGold' ).style.display = "none";
			document.getElementById( 'darkRed' ).style.display = "none";
			document.getElementById( 'darkGreen' ).style.display = "none";
			document.getElementById( 'darkPurple' ).style.display = "none";
			document.getElementById( 'Default' ).style.display = "none";
		}

	}
	
	function showDivx( select ) {

		if ( select.value == 'light-theme-gold.css' ) {
			document.getElementById( 'lightGold' ).style.display = "block";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "none";
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightBlack' ).style.display = "none";
			
		} else if ( select.value == 'light-theme-green.css' ) {
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "block";
			document.getElementById( 'lightPurple' ).style.display = "none";
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightBlack' ).style.display = "none";
			
		} else if ( select.value == 'light-theme-red.css' ) {
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "block";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "none";
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightBlack' ).style.display = "none";
			
		} else if ( select.value == 'light-theme-purple.css' ) {
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "block";	
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightBlack' ).style.display = "none";
			
		} else if ( select.value == 'theme.min.css' ) {
			document.getElementById( 'lightDefault' ).style.display = "block";
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "none";	
			document.getElementById( 'lightBlack' ).style.display = "none";
			
			} else if ( select.value == 'light-theme-black.css' ) {
			document.getElementById( 'lightBlack' ).style.display = "block";
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "none";	
			
		} else {
			document.getElementById( 'lightGold' ).style.display = "none";
			document.getElementById( 'lightRed' ).style.display = "none";
			document.getElementById( 'lightGreen' ).style.display = "none";
			document.getElementById( 'lightPurple' ).style.display = "none";
			document.getElementById( 'lightDefault' ).style.display = "none";
			document.getElementById( 'lightBlack' ).style.display = "none";
		}

	}