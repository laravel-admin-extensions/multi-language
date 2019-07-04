<?php


namespace KevinSoft\MultiLanguage\Widgets;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Log;
use KevinSoft\MultiLanguage\MultiLanguage;

class LanguageMenu implements Renderable
{

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        // TODO: Implement render() method.
        $languages = MultiLanguage::config("languages");
        return view("multi-language::language-menu", compact('languages'))->render();
    }
}