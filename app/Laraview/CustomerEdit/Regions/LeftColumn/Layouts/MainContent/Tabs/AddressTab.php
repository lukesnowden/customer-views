<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs;

use Laraview\Libs\Blueprints\TabBlueprint;
use Laraview\Libs\Layouts\Tabs\Tab;

class AddressTab extends Tab implements TabBlueprint
{

    /**
     * @var string
     */
    protected $name = 'Address';

    /**
     * Elements to render into tab
     * @var array
     */
    protected $elements = [
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\AddressLine1Element::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\AddressLine2Element::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\TownElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\CityElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\CountyElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\PostcodeElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab\Elements\CountryElement::class
	];

}
