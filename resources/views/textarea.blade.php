<div class="input-group input-group-sm">

    <div class="input-group-prepend">
        <span class="input-group-text bg-white text-capitalize"><b>{!! $label ?? '' !!}</b></span>
    </div>
    <textarea style="height: 34px;min-height: 34px;max-height: 700px" name="{{$name}}" class="form-control {{$class}}" placeholder="{{ $placeholder }}">@if(is_array($value)){{$value = implode($separator, $value)}}@endif</textarea>
</div>

<script>
    const textarea = document.querySelector('textarea');
    // 监听输入事件
    textarea.addEventListener('input', function () {
        adjustHeight(this);
    });

    // 添加更安全的DOM变化监听
    let isAdjusting = false;
    const observer = new MutationObserver(function (mutations) {
        if (!isAdjusting && textarea.value !== textarea.getAttribute('data-last-value')) {
            isAdjusting = true;
            adjustHeight(textarea);
            textarea.setAttribute('data-last-value', textarea.value);
            setTimeout(() => { isAdjusting = false; }, 0);
        }
    });

    // 配置观察选项 - 只监听必要的变化
    const config = {
        childList: true,     // 监听子节点变化
        characterData: true, // 监听文本内容变化
        subtree: true,       // 监听所有后代节点变化
        attributeFilter: ['value'] // 只监听value属性变化
    };

    // 开始观察文本框而不是整个body
    observer.observe(textarea.parentNode, config);

    // 初始化时设置数据属性
    textarea.setAttribute('data-last-value', textarea.value);

    // 初始化时调整高度
    adjustHeight(textarea, 16 * 10);

    // 调整高度的函数
    function adjustHeight(element, delay = 0) {
        element.style.height = 'auto';
        if (delay === 0){
            element.style.height = element.scrollHeight + 'px';
        }else {
            setTimeout(() => {
                element.style.height = element.scrollHeight + 'px';
            }, delay);
        }
    }
</script>