<div class="input-group input-group-sm">

    <div class="input-group-prepend">
        <span class="input-group-text bg-white text-capitalize"><b>{!! $label ?? '' !!}</b></span>
    </div>
    <textarea style="height: 34px" name="{{$name}}" class="form-control {{$class}}" placeholder="{{ $placeholder }}">@if(is_array($value)){{$value = implode($separator, $value)}}@endif</textarea>
</div>

<script>
    const textarea = document.querySelector('textarea');

    textarea.addEventListener('input', (e) => {
        textarea.style.height = '36px';
        textarea.style.height = e.target.scrollHeight + 'px';
    });
</script>