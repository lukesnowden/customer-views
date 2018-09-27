<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions;

use Laraview\Libs\Blueprints\RegionBlueprint;
use Laraview\Libs\BaseRegion;

class RightColumnRegion extends BaseRegion implements RegionBlueprint
{

    /**
     * Placeholder to be used to render into template
     * @var string
     */
    protected $placeholder = '[RIGHT_COLUMN]';

    /**
     * Elements or Layouts to be rendered into region
     * @var array
     */
    protected $elements = [
		\CustomerViews\Laraview\CustomerEdit\Regions\RightColumn\Elements\ActiveElement::class
	];

}
