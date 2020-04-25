
<ol class="dd-list">


    @foreach(json_decode(unserialize($data)) as $line)

        @if(array_key_exists('children',$line))
            <li class="dd-item dd3-item" data-id="{{$line->id}}">
                <button data-action="collapse" type="button">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>
                <div class="dd-handle dd3-handle">
                    Drag
                </div>
                <div class="dd3-content">
                    With a switch



                </div>
            <ol class="dd-list">
                @foreach($line->children as $inserted)
                    <li class="dd-item dd3-item" data-id="{{$inserted->id}}">
                        <div class="dd-handle dd3-handle">
                            .
                        </div>
                        <div class="dd3-content">
                            Item {{$inserted->id}}


                        </div>
                @endforeach
                @else
                    <li class="dd-item dd3-item" data-id="{{$line->id}}">
                        <div class="dd-handle dd3-handle">
                            .
                        </div>
                        <div class="dd3-content">
                            Item {{$line->id}}



                        </div>
                    </li>
                @endif
                @if(array_key_exists('children',$line))
            </ol >
            </li>
        @endif


    @endforeach
</ol>

