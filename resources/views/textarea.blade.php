<div class="input-group input-group-sm">

    <div class="input-group-prepend">
        <span class="input-group-text bg-white text-capitalize"><b>{!! $label ?? '' !!}</b></span>
    </div>
    <textarea name="{{$name}}" class="form-control {{$class}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ $value }}</textarea>
</div>
