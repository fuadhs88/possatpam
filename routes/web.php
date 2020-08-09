<?php

use Dcat\Admin\Extension\PosSatpam\Http\Controllers;

Route::get('possatpam', Controllers\PossatpamController::class.'@index');