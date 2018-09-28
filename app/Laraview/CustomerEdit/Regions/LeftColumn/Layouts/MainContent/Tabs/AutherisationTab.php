<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs;

use Laraview\Libs\Blueprints\TabBlueprint;
use Laraview\Libs\Layouts\Tabs\Tab;

class AutherisationTab extends Tab implements TabBlueprint
{

    /**
     * @var string
     */
    protected $name = 'Autherisation';

    /**
     * Elements to render into tab
     * @var array
     */
    protected $elements = [
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AutherisationTab\Elements\PasswordElement::class,
		\CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AutherisationTab\Elements\ConfirmationPasswordElement::class
	];

}
