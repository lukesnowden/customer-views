<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainLeftContentTabs\Tabs;

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
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\TitleElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\ForenameElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\SurnameElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\EmailAddressElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\DescriptionElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\CompanyNameElement::class
    ];

}
