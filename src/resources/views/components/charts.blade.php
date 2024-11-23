<div id="{{$className}}"
     target="charts_{{$className}}">
    <charts-component
            @if($data)
                :data="{{$data}}"
            @endif
            author
    >

    </charts-component>{{$data}}
</div>
