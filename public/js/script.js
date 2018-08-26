$( function() {

    $( '.delete-button' ).on( 'click', deleteProject );

    function deleteProject() {

        var confirmation = confirm( 'Are you sure you want to delete "' + $( this ).data( 'title' ) + '"?' );

        if( confirmation )
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                type: "POST",
                data:{ _method:"DELETE" },
                url: "/projects/" + $( this ).data( 'id' )

            }).done( function( request ) {

                window.location.replace( '/dash' );
            });

        } else {

            return false;
        }
    }
});