<?php
namespace Lnatpunblhna\InTextarea\Filter;

use Dcat\Admin\Grid\Filter\AbstractFilter;

class CustomAbstractFilter extends AbstractFilter
{
    protected $len;

    protected $separator = ',';
    public function __construct($column, $label = '',$len = 0)
    {
        parent::__construct($column, $label);

        $this->len = $len;
    }

    protected function setupDefaultPresenter()
    {
        $this->setPresenter(new InTextarea());
    }

    public function setSeparator(string $separator): CustomAbstractFilter
    {
        $this->separator = $separator;
        return $this;
    }

    public function getSeparator(): string
    {
        return $this->separator;
    }
}