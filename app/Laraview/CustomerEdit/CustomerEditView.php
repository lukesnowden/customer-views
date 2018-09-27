<?php

namespace CustomerViews\Laraview\CustomerEdit;

use Laraview\Libs\Blueprints\ViewBlueprint;
use Laraview\Libs\BaseView;

class CustomerEditView extends BaseView implements ViewBlueprint
{

    /**
     * Dot notation destination to compiled blade template
     * @var string
     */
    protected $path = 'customer.edit';

    /**
     * Template used for compiling
     * @var string
     */
    protected $baseViewPath = 'template.blade.php';

    /**
     * Regions to attach to this view
     * @var array
     */
    protected $regions = [
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumnRegion::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\RightColumnRegion::class
	];

}
