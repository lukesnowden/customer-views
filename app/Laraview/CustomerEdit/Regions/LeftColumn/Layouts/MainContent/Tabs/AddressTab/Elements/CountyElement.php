<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Text;

class CountyElement extends Text implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'county';

    /**
     * Label text
     * @var string
     */
    protected $label = 'County';

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
