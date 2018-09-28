<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\RightColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Checkbox;

class ActiveElement extends Checkbox implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'active';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Active';

    /**
     * Input elements HTML attributes
     * @var array
     */
    protected $attributes = [
        
    ];

    /**
     * @return mixed
     * $this->region->getView()->data() // Use this data to inject...
     */
    public function value()
    {
        parent::value();
    }

    /**
     * Determines if the element is checked or not
     * @return bool
     */
    public function status()
    {
        return false;
    }

}
