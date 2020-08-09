<?php

namespace Dcat\Admin\Extension\PosSatpam;

use Dcat\Admin\Extension;

class Possatpam extends Extension
{
    const NAME = 'possatpam';

    protected $serviceProvider = PossatpamServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => 'Pos Satpam',
        'path'  => 'possatpam',
        'icon'  => 'fa-cogs',
    ];
}
