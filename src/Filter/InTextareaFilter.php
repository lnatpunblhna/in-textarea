<?php

namespace Lnatpunblhna\InTextarea\Filter;

use Illuminate\Support\Arr;

class InTextareaFilter extends CustomAbstractFilter
{
    protected $query = 'whereIn';

    public function condition($inputs)
    {
        $value = Arr::get($inputs, $this->column);

        if ($value === null) {
            return;
        }

        $this->value = is_array($value) ? $value : $this->split_string_with_comma($value);

        return $this->buildCondition($this->column, $this->value);
    }

    public function split_string_with_comma(string $input): array
    {
        // 统一换行符为逗号
        $input = str_replace(["\n", "\r", " "], ',', $input);
        // 替换中文逗号为英文逗号
        $input = str_replace('，', ',', $input);
        // 分割并处理元素
        $ids = array_map('trim', explode(',', $input));
        $ids = array_unique(array_filter($ids));

        // 添加单个元素长度校验
        if ($this->len != 0) {
            foreach ($ids as $key=>$item) {
                if (strlen($item) !== $this->len) {
                    unset($ids[$key]);
                }
            }
        }

        return $ids;
    }

}