<?php

namespace Lnatpunblhna\InTextarea;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Grid\Filter;
use Lnatpunblhna\InTextarea\Filter\InTextareaFilter;

class InTextareaServiceProvider extends ServiceProvider
{
	public function init()
	{
		parent::init();

        Filter::extend('inTextarea', InTextareaFilter::class);

        \Dcat\Admin\Admin::requireAssets('@lnatpunblhna.in-textarea');
	}
}
