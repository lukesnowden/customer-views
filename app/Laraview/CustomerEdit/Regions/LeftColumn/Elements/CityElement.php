<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Text;

class CityElement extends Text implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'city';

    /**
     * Label text
     * @var string
     */
    protected $label = 'City';

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

}
