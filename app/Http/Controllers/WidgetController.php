<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Currency;


class WidgetController extends Controller
{
    /**
     * Показать профиль конкретного пользователя.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // this is test function
        $ret1 = WidgetController::EUR();
        return view('home', [
                'key' => 'ura через кей из функции',
                'arr' => json_encode($ret1)
            ]);

        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }

    function get_widget_currency()
    {
        $input = WidgetController;

        return view('inc.widget.currency-rate', [
                'rub_usd' => $input->rub_usd,
                'rub_eur' => $input->rub_eur,
                'rub_try' => $input->rub_try
            ]);

    }

}



