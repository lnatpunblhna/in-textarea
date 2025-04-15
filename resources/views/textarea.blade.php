<div class="input-group input-group-sm">
    <div class="input-group-prepend">
        <span class="input-group-text bg-white text-capitalize"><b>{!! $label ?? '' !!}</b></span>
    </div>
    <textarea style="height: 34px;min-height: 34px;max-height: 700px" name="{{$name}}" class="form-control {{$class}}" placeholder="{{ $placeholder }}">@if(is_array($value)){{$value = implode($separator, $value)}}@endif</textarea>
</div>

<script>
    import autosize from "autosize/dist/autosize";

    Dcat.ready(function (){
        autosize($('#{{$name}}-textarea'));
    });
</script>