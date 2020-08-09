<?php

namespace Dcat\Admin\Extension\PosSatpam\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class PossatpamController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('CCTV POS Satpam')
            ->description('View CCTV Pos Satpam')
            ->body(view('possatpam::index'));
    }
}
