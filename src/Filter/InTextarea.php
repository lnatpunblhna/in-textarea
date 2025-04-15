<?php

namespace Lnatpunblhna\InTextarea\Filter;

use Dcat\Admin\Grid\Filter\Presenter\Presenter;

/**
 * @property CustomAbstractFilter $filter
 */
class InTextarea extends Presenter
{
    protected $view = 'lnatpunblhna.in-textarea::textarea';

    public static $js = [
        '@extension/lnatpunblhna/in-textarea/auto-resize-textarea.js',
    ];

    protected $width = 12;

    protected $placeholder;

    protected $elementClass = null;
    public function placeholder(string $placeholder = null)
    {
        if ($placeholder === null) {
            return $this->placeholder ?: trans('admin.input') . ' ' . $this->filter->getLabel();
        }

        $this->placeholder = $placeholder;

        return $this;
    }


    public function defaultVariables(): array
    {
        return [
            'separator'   => $this->filter->getSeparator() ?? ',',
            'class'       => $this->filter->column(),
            'placeholder' => $this->placeholder(),
        ];
    }
}