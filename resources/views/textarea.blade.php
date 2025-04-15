<div class="input-group input-group-sm">
    <div class="input-group-prepend">
        <span class="input-group-text bg-white text-capitalize">
            <b>{!! $label ?? '' !!}</b>
        </span>
    </div>
    <textarea
            style="height: 34px; min-height: 34px; max-height: 700px"
            name="{{ $name }}"
            id="{{ $name }}-textarea"
            class="form-control filter-column-{{ $name }} {{ $class }} auto-resize-textarea"
            placeholder="{{ $placeholder }}"
            data-auto-resize-id="{{ $name }}"
    >@if(is_array($value)){{ $value = implode($separator, $value) }}@endif</textarea>
</div>
