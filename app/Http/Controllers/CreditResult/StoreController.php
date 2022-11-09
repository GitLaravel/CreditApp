<?php

namespace App\Http\Controllers\CreditResult;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreditResult\StoreRequest;
use Illuminate\Support\Carbon;
use App\Models\Clients;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $dataClients = $request->only(['surname', 'name', 'patronymic','tel', 'email' ]);
        Clients::firstOrCreate($dataClients);
        $age = Carbon::parse($request->birthday)->diffInYears();
        $pereplata = ($data['loan_amount'] * 9 * 365/365)/100;
        $payments = $pereplata / 12;
        return view('CreditResult.show')->with('data', $data)
                                        ->with('age', $age)
                                        ->with('pereplata', $pereplata)
                                        ->with('payments', $payments);
    }
}
