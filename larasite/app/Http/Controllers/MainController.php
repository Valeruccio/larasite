<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use function Symfony\Component\String\s;

class MainController extends Controller {
    public function home() {
        //Вызов строк из папки ru, в Ларавеле 5+ это делается так, скорее всего можно найти способ
        //как переключать языки
        $data = [
            'title' => Lang::get('main.maintitle', [], 'ru'),
            'freecol' => Lang::get('main.freecol', [],'ru'),
            'procol' => Lang::get('main.procol', [], 'ru'),
            'enterprisecol' => Lang::get('main.enterprisecol', [], 'ru')
        ];
        return view('home', $data);
    }

    public function about() {
        $data = [
            'title' => Lang::get('main.abouttitle', [], 'ru')
        ];
        return view('about', $data);
    }

    public function rewiew() {
        $data = [
            'title' => Lang::get('main.rewiewtitle', [], 'ru')
        ];
        return view('rewiew', $data);
    }
}
