<?php

use KevinSoft\MultiLanguage\Http\Controllers\MultiLanguageController;
use KevinSoft\MultiLanguage\MultiLanguage;

Route::post('/locale', MultiLanguageController::class.'@locale');
if(MultiLanguage::config("show-login-page", true)) {
    Route::get('auth/login', MultiLanguageController::class.'@getLogin');
}
