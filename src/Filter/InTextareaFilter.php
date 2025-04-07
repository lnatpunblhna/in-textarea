<?php

namespace Lnatpunblhna\InTextarea\Filter;

use Illuminate\Support\Arr;

class InTextareaFilter extends CustomAbstractFilter
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereIn';

    /**
     * @var int
     */
    protected $width = 12;

    /**
     * Get condition of this filter.
     *
     * @param array $inputs
     *
     * @return mixed
     */
    public function condition($inputs)
    {
        $value = Arr::get($inputs, $this->column);

        if ($value === null) {
            return;
        }

        $this->value = is_array($value) ? $value : explode(',', $value);

        return $this->buildCondition($this->column, $this->value);
    }
}