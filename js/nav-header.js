/**
 * nav-header.js
 *
 * Handles toggling the search form in the header menu.
 */
( function() {

	var button, searchForm, searchField, focus;

	button = document.getElementById( 'header-search-button' );
	if ( ! button ) { return; }

	searchForm = document.getElementById( 'search-wrap' );
	if ( ! searchForm ) { return; }

	searchField = document.getElementsByClassName( 'search-field' )[0];
	if ( ! searchField ) { return; }

	button.onclick = function() {

		focus = document.activeElement;

		if ( -1 === searchForm.className.indexOf( 'open' ) ) {

			searchForm.className += 'open';
			searchField.focus();

		} else if ( searchField === focus ) {

			return;

		} else {

			searchForm.className = searchForm.className.replace( 'open', '' );

		}
	};

} )();



