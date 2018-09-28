<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs;

use Laraview\Libs\Blueprints\TabBlueprint;
use Laraview\Libs\Layouts\Tabs\Tab;

class GeneralTab extends Tab implements TabBlueprint
{

    /**
     * @var string
     */
    protected $name = 'General';

    /**
     * Elements to render into tab
     * @var array
     */
    protected $elements = [
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\ForenameElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\SurnameElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\TitleElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\EmailAddressElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\DescriptionElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab\Elements\CompanyNameElement::class
	];

}
