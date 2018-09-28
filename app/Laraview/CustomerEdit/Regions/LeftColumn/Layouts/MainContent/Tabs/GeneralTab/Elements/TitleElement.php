<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements;

use Laraview\Libs\Blueprints\ElementBlueprint;
use Laraview\Libs\Elements\Select;

class TitleElement extends Select implements ElementBlueprint
{

    /**
     * @var string
     */
    protected $name = 'title';

    /**
     * @var string
     */
    protected $label = 'Title';

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
    protected $options = [
        'mr' => 'Mr',
		'mrs' => 'Mrs',
    ];

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
