<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AutherisationTab\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Password;

class ConfirmationPasswordElement extends Password implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'confirmation_password';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Confirm Password';

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
