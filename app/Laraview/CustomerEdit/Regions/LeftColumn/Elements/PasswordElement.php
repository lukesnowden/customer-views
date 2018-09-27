<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Password;

class PasswordElement extends Password implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'password';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Password';

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
