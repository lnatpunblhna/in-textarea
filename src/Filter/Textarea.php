<?php

namespace Lnatpunblhna\InTextarea\Filter;

use Dcat\Admin\Grid\Filter\Presenter\Presenter;

class Textarea extends Presenter
{
    protected $view = 'lnatpunblhna.in-textarea::textarea';

    protected $width = 12;

    protected $label = '';

    protected $placeholder;

    protected $elementClass = null;

    protected $attributes = [];


    public function label($label = null)
    {
        if ($label == null) {
            return $this->label;
        }

        if ($label instanceof \Closure) {
            $label = $label($this->label);
        }

        $this->label = $label;

        return $this;
    }

    /**
     * Set input placeholder.
     *
     * @param string|null $placeholder
     *
     * @return $this|string
     */
    public function placeholder(string $placeholder = null)
    {
        if ($placeholder === null) {
            return $this->placeholder ?: trans('admin.input').' '.$this->label;
        }

        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * @return array
     */
    public function defaultVariables(): array
    {
        return [
            'class'     => $this->getElementClass(),
            'placeholder' => $this->placeholder(),
                 'attributes'  => $this->formatAttributes(),
        ];
    }

    protected function formatAttributes(): string
    {
        $html = [];

        foreach ($this->attributes as $name => $value) {
            $html[] = $name.'="'.e($value).'"';
        }

        return implode(' ', $html);
    }

    /**
     * @return string
     */
    public function getElementClass(): string
    {
        return $this->elementClass ?:($this->elementClass = $this->getClass($this->filter->column()));
    }

    /**
     * Get form element class.
     *
     * @param string $target
     *
     * @return mixed
     */
    protected function getClass(string $target): string
    {
        return str_replace('.', '_', $target);
    }
}