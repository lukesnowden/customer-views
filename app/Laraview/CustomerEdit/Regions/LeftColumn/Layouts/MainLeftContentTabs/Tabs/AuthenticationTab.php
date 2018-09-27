<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainLeftContentTabs\Tabs;

use Laraview\Libs\Blueprints\TabBlueprint;
use Laraview\Libs\Layouts\Tabs\Tab;

class AuthenticationTab extends Tab implements TabBlueprint
{

    /**
     * @var string
     */
    protected $name = 'Authentication';

    /**
     * Elements to render into tab
     * @var array
     */
    protected $elements = [
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\PasswordElement::class,
        \CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Elements\PasswordConfirmationElement::class
    ];

}
