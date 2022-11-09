<?php

namespace App\Http\Controllers\CreditResult;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(){

        return view('CreditResult.create');
    }
}
