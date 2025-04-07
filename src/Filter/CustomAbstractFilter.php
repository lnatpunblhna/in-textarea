<?php
namespace Lnatpunblhna\InTextarea\Filter;

use Dcat\Admin\Grid\Filter\AbstractFilter;

class CustomAbstractFilter extends AbstractFilter
{
    public function __construct($column, $label = '')
    {
        parent::__construct($column, $label);
    }

    public function textarea()
    {
        return $this->setPresenter(new Textarea());
    }
}