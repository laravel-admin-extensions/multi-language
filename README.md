laravel-admin Multi Language
======

## Install

```
composer require kevinsoft/multi-language
```

## Config


First, add extension config

In `config/admin.php`

```
    'extensions' => [
        'multi-language' => [
            'enable' => true,
            // the key should be same as var locale in config/app.php
            // the value is used to show
            'languages' => [
                'en' => 'English',
                'zh-CN' => '简体中文',
            ],
            // default locale
            'default' => 'zh-CN',
        ],
    ],
```

Then, add except route to auth

In `config/admin.php`, add `locale` to `auth.excepts`

```
    'auth' => [
        ...
        // The URIs that should be excluded from authorization.
        'excepts' => [
            'auth/login',
            'auth/logout',
            // add this line !
            'locale',
        ],
    ],

```

## ScreenShots

