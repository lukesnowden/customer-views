<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Text;

class AddressLine2Element extends Text implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'address_line_2';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Address Line 2';

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
