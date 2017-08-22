<?php

namespace -NAMESPACE-\-PACKAGE-\Controllers\Http\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use -NAMESPACE-\-PACKAGE-\Libraries\HttpController;

class -PACKAGE-DashboardController extends HttpController
{

    public function index(Request $request)
    {
        return view('-package-::admin.dashboard', compact([
                'request'
            ]));
    }

}
