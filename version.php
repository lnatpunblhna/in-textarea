<?php

return [
    '1.0.0' => [
        'Initialize extension.',
    ],
    '1.0.1' => [
        'Add input filter module',
    ],
    '1.0.2' => [
        '[新增] 中文标点处理：自动转换中文顿号为逗号',
        '[优化] 文本域自动高度调整功能：
            - 采用 MutationObserver 实现动态内容监听
            - 增加初始化时的高度自适应逻辑
            - 添加 data-auto-resize 数据属性控制',
        '[样式] 设置文本域约束：
            - 最小高度 34px
            - 最大高度限制 700px',
        '[配置] 增加数据属性设置接口'
    ],
    '1.0.3' => [
        '[重构] textarea.blade.php：
            - 引入 autosize 库，实现自动调整高度
            - 优化值的显示和处理，支持数组值和空值',
        '[优化] 输入过滤：
            - 优化值的显示和处理，支持数组值和空值',
        '[优化] 调整高度：
            - 移除原有的手动调整高度逻辑'
    ]
];

