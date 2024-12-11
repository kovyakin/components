<div id="{{$className}}"
     target="charts_{{$className}}"
     type="{{$type}}">
    <charts-component
            @if($type)
                type="{{$type}}"
            @else
                type='line'
            @endif
            @if($control_hover) control_hover
            @endif
            x_axis="{{$x_axis}}"
            y_axis="{{$y_axis}}"
            stroke_dasharray="{{$stroke_dasharray}}"
            chart_size="{{$chart_size}}"
            margin="{{$margin}}"
            @if($tooltip_show)
                tooltip_show
            @endif
            direction="{{$direction}}"
            marker="{{$marker}}"
            @if($use_modal) use_modal
            @endif
            modal="{{$modal}}"
            @if($select)
            select
            @endif
    >

    </charts-component>
</div>
@once
    @push('charts')
        <script src="{{asset('/vendor/kovyakin/components/charts/app--YuYW7jh.min.js')}}"
                type="module"></script>
        <link href="{{asset('/vendor/kovyakin/components/charts/app-DdRN9Z1L.css')}}"
              rel="stylesheet"/>
    @endpush
@endonce
