

<script>

 jQuery.getScript( "/jasmine/plugins/dropzone/dropzone.min.js", function( data, textStatus, jqxhr ) {
        console.log( data ); // Data returned
        console.log( textStatus ); // Success
        console.log( jqxhr.status ); // 200
        console.log( "Load was performed2." );
    });

</script>
