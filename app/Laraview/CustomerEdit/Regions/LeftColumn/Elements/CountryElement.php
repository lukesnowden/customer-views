<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Select;

class CountryElement extends Select implements ElementBlueprint
{

    /**
     * @var string
     */
    protected $name = 'country';

    /**
     * @var string
     */
    protected $label = 'Country';

    /**
     * Element attributes
     * @var array
     */
    protected $attributes = [
        
    ];

    /**
     * Select options
     * @var array
     */
    protected $options = [];


    public function preRender()
    {
        parent::preRender();
        $this->options = [ 'United Kingdom' => 'United Kingdom' ];
    }

    /**
     * @return mixed
     */
    public function value()
    {
        /**
         * $this->region->getView()->data() // Use this data to inject...
         */
        parent::value();
    }

}
