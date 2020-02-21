<?php

namespace KevinSoft\MultiLanguage\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use KevinSoft\MultiLanguage\MultiLanguage;

class MultiLanguageController extends Controller
{

    public function locale() {
        $locale = Request::input('locale');
        $languages = MultiLanguage::config('languages');

        $cookie_name = MultiLanguage::config('cookie-name', 'locale');
        if(array_key_exists($locale, $languages)) {

            return response('ok')->cookie($cookie_name, $locale);
        }
    }

    public function getLogin() {
        $languages = MultiLanguage::config("languages");
        $cookie_name = MultiLanguage::config('cookie-name', 'locale');

        $current = MultiLanguage::config('default');
        if(Cookie::has($cookie_name)) {
            $current = Cookie::get($cookie_name);
        }
        return view("multi-language::login", compact('languages', 'current'));
    }
}
