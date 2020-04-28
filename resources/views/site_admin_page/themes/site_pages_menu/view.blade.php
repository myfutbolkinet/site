
<ol class="dd-list">


    @foreach(json_decode(unserialize($data)) as $line)
    <?
        $item=\App\AdditionalMenu::where('nestable_id',$line->id)->first();
        ?>
        @if(array_key_exists('children',$line))
            <li class="dd-item dd3-item" data-id="{{$line->id}}">
                <button data-action="collapse" type="button">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>
                <div class="dd-handle dd3-handle">
                    Drag
                </div>
                <div class="dd3-content">
                    {{$item->text}}
                    <span class="pull-right" style="position:relative;top:-5px">
                        <a onclick="itemConfigure({{$line->id}})" href="javascript:void(0);" class="btn btn-default txt-color-green"><i class="fa fa-gear fa-lg"></i></a>
                    </span>



                </div>
            <ol class="dd-list">
                @foreach($line->children as $inserted)
                    <?
                    $itemChild=\App\AdditionalMenu::where('nestable_id',$inserted->id)->first();
                    ?>
                    <li class="dd-item dd3-item" data-id="{{$inserted->id}}">
                        <div class="dd-handle dd3-handle">
                            .
                        </div>
                        <div class="dd3-content">
                            {{$itemChild->text}}
                            <span class="pull-right" style="position:relative;top:-5px">
                        <a onclick="itemConfigure({{$inserted->id}})" href="javascript:void(0);" class="btn btn-default txt-color-green"><i class="fa fa-gear fa-lg"></i></a>
                    </span>

                        </div>
                @endforeach
                @else
                    <li class="dd-item dd3-item" data-id="{{$line->id}}">
                        <div class="dd-handle dd3-handle">
                            .
                        </div>
                        <div class="dd3-content">
                            {{$itemChild->text}}
                            <span class="pull-right" style="position:relative;top:-5px">
                        <a onclick="itemConfigure({{$inserted->id}})" href="javascript:void(0);" class="btn btn-default txt-color-green"><i class="fa fa-gear fa-lg"></i></a>
                    </span>



                        </div>
                    </li>
                @endif
                @if(array_key_exists('children',$line))
            </ol >
            </li>
        @endif


    @endforeach
</ol>

@section('nestable')

    @endsection

