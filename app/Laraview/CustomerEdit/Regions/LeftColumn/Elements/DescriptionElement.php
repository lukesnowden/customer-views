<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Textarea;

class DescriptionElement extends Textarea implements ElementBlueprint
{

    /**
     * Name of input
     * @var string
     */
    protected $name = 'description';

    /**
     * Label text
     * @var string
     */
    protected $label = 'Description';

    /**
     * Input elements HTML attributes
     * @var array
     */
    protected $attributes = [
        'rows' => 7
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
