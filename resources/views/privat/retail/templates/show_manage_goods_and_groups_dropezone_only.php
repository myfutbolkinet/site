<!--[if lt IE 9]>

<![endif]-->
<div class="row">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-control">
                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
            </div>
            <h3 class="panel-title">Фото</h3>
        </div>
        <div class="panel-body">

            <!--Dropzonejs-->
            <!--===================================================-->
            <form id="demo-dropzone" action="/goods/upload_files" class="dropzone">
                <div class="dz-default dz-message">
                    <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i> </div>
                    <div>
                        <p class="dz-text">Бросьте файлы для загрузки</p>
                        <p class="text-muted">Или кликните тут</p>
                    </div>
                </div>
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
            <!--===================================================-->
            <!-- End Dropzonejs -->

        </div>
    </div>

</div>



<script>

    jQuery.getScript( "/jasmine/plugins/dropzone/dropzone.min.js", function( data, textStatus, jqxhr ) {
        console.log( data ); // Data returned
        console.log( textStatus ); // Success
        console.log( jqxhr.status ); // 200
        console.log( "Load was performed2." );
    });

</script>
