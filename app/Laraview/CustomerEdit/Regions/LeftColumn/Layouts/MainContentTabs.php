<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts;

use Laraview\Libs\Blueprints\LayoutBlueprint;
use Laraview\Libs\Layouts\Tabs;
use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\GeneralTab;
use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AddressTab;
use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainContent\Tabs\AutherisationTab;

class MainContentTabs extends Tabs implements LayoutBlueprint
{

    /**
     * @var array
     */
    protected $tabs = [
        GeneralTab::class,
		AddressTab::class,
		AutherisationTab::class,
    ];

}
