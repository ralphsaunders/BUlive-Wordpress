$( document ).ready( function() {

    $( '#access a' ).click( function( e ) {
        e.preventDefault();
        $( '#main' ).load( $( this ).attr( 'href' ) );
    });

});
