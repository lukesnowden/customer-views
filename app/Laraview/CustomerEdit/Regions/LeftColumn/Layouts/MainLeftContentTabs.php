<?php

namespace CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts;

use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainLeftContentTabs\Tabs\AddressTab;
use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainLeftContentTabs\Tabs\AuthenticationTab;
use Laraview\Libs\Blueprints\LayoutBlueprint;
use Laraview\Libs\Layouts\Tabs;
use CustomerViews\Laraview\CustomerEdit\Regions\LeftColumn\Layouts\MainLeftContentTabs\Tabs\GeneralTab;

class MainLeftContentTabs extends Tabs implements LayoutBlueprint
{

    /**
     * @var array
     */
    protected $tabs = [
        GeneralTab::class,
        AddressTab::class,
        AuthenticationTab::class
    ];

}
