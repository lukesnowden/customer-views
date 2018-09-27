<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Email;

class EmailAddressElement extends Email implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'email_address';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Email Address';

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
