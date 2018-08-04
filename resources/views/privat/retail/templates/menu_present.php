

<div id="manu_present" class="row">

    <div class="col-sm-4 panel panel-primary">
        <div class="panel-heading ui-sortable-handle">
            <div class="panel-control">

                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>

            </div>
            <h3 class="panel-title">Горизонтальное меню</h3>

        </div>
        <div class="panel-body" style="display: block;">
            <h5 class="link"><a data-text="showEditHorisontalMenu">Редактировать</a></h5>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>

    <div class="col-sm-4 panel panel-mint">
        <div class="panel-heading ui-sortable-handle">
            <div class="panel-control">

                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>

            </div>
            <h3 class="panel-title">Боковое меню</h3>
        </div>
        <div class="panel-body">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="col-sm-4 panel panel-success">
        <div class="panel-heading ui-sortable-handle">
            <div class="panel-control">

                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>

            </div>
            <h3 class="panel-title">Нижнее меню</h3>
        </div>
        <div class="panel-body">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>



</div>

<!--Ui Panel script [ DEMONSTRATION ]-->

<script src="/jasmine/js/demo/ui-panels.js"></script>
<script>
    //Get content
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.link a').click(function(){

        var href= $(this).attr('data-text');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: href,
            success: function(jsondata){
                $('#result').html(jsondata.html)
            }
        });

    })

</script>