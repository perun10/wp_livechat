jQuery( document ).ready( function( $ ) {

    // Show the window when the page loads
    $( '#bottom-right-window' ).fadeIn();

    // Close the window when the button is clicked
    $( '#bottom-right-window-close' ).click( function() {
        $( '#bottom-right-window' ).fadeOut();
    } );

} );
