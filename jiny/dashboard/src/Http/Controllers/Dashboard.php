<?php

namespace Jiny\Dashboard\Http\Controllers;

use Illuminate\Http\Request;

use Jiny\Dashboard\Http\Controllers\DashboardController;
class Dashboard extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return parent::index($request);
    }


}
