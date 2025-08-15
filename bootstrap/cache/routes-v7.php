<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qVp2pyFuQpSZOqCi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/valid-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'valid.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oVAr5Y0ffAB30gGJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u7tGbyTGLhSGVTmg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qpi9GJfVRHoZ4Dtc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profiles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/abilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kncf5dVJsVBLTPZm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IFkjesvO9FGVno0Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BeOR32jVISG70hei',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lE8mwzAmeLqu9fVO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/list_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wi7X8qdouksGnciK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VYs0hIJSV4cWsjUb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l8ufiQddbursFiR1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addresses/list_addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NLT4Nioltn9Senqv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/election_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CJmp60C63CbzkwRx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ckyZyBN8jcXpEFwK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/election_types/list_election_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::19azQqouuP32NNGf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qrjolMhHcVmNHJXt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/captcha(?|/api(?:/([^/]++))?(*:36)|(?:/([^/]++))?(*:57))|/api/(?|profiles/([^/]++)(?|(*:93)|/abilities(?|(*:113))|(*:122)|(*:130))|a(?|bilities/([^/]++)(?|(*:163))|ddresses/(?|([^/]++)(?|(*:195))|restore/([^/]++)(*:220)))|users/(?|([^/]++)(?|(*:250)|/profiles(*:267)|(*:275))|restore/([^/]++)(*:300))|election_types/(?|([^/]++)(?|(*:338))|restore/([^/]++)(*:363))|faqs/([^/]++)(?|(*:388))))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dJJqoNcauLQisakI',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      57 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ath27M46qZPnSMlN',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      93 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.show',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.abilities',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.abilities.store',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.update',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiles.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k7OlgfIb1bOcHTYu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pu2r0IJDm0MTg0Fo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6zI1fGQMccBn30W4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7yuuTcLUHRxBE3iM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gKMPU3ycRhUrZtdc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i4Ah6pTnLtfm8d9q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7bQSNyLGGookeEik',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zKKo1DQaEIWdf5A3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ot4CAOydzji5v5qZ',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EvpVNIN7bQ97IK1P',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LFn1geZFZwfTPat1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EYvRhzjq6ICQWDnX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sGzRcbI8SPv0Ywmi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KlYQrBNyovN5Rvwn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCJKNcG6hFnra3wH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::htE8Ixfiobwsx1Av',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f0OsqrebJPAFP04O',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZLqLkbZaT4GzdE0M',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5cVvnlk7zZbW2Ly',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        3 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dJJqoNcauLQisakI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/api/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::dJJqoNcauLQisakI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ath27M46qZPnSMlN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Ath27M46qZPnSMlN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qVp2pyFuQpSZOqCi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qVp2pyFuQpSZOqCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@sendEmail',
        'controller' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@sendEmail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'valid.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/valid-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@validToken',
        'controller' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@validToken',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'valid.token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\ForgotPasswordController@resetPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\FaqController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u7tGbyTGLhSGVTmg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@me',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@me',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::u7tGbyTGLhSGVTmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qpi9GJfVRHoZ4Dtc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ReportErrorController@sendEmailReport',
        'controller' => 'App\\Http\\Controllers\\Api\\ReportErrorController@sendEmailReport',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qpi9GJfVRHoZ4Dtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@index',
        'as' => 'profiles.index',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@show',
        'as' => 'profiles.show',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.abilities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profiles/{profile}/abilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@getAbilities',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@getAbilities',
        'as' => 'profiles.abilities',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@beforeStore',
        'as' => 'profiles.store',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.abilities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profiles/{profile}/abilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@storeAbilities',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@storeAbilities',
        'as' => 'profiles.abilities.store',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@beforeUpdate',
        'as' => 'profiles.update',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profiles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/profiles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@destroy',
        'as' => 'profiles.destroy',
        'namespace' => NULL,
        'prefix' => 'api/profiles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kncf5dVJsVBLTPZm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/abilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_habilidade',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AbilityController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\AbilityController@index',
        'namespace' => NULL,
        'prefix' => 'api/abilities',
        'where' => 
        array (
        ),
        'as' => 'generated::Kncf5dVJsVBLTPZm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k7OlgfIb1bOcHTYu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/abilities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_habilidade',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AbilityController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\AbilityController@show',
        'namespace' => NULL,
        'prefix' => 'api/abilities',
        'where' => 
        array (
        ),
        'as' => 'generated::k7OlgfIb1bOcHTYu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IFkjesvO9FGVno0Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/abilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_habilidade',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AbilityController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\AbilityController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/abilities',
        'where' => 
        array (
        ),
        'as' => 'generated::IFkjesvO9FGVno0Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pu2r0IJDm0MTg0Fo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/abilities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_habilidade',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AbilityController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\AbilityController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/abilities',
        'where' => 
        array (
        ),
        'as' => 'generated::pu2r0IJDm0MTg0Fo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6zI1fGQMccBn30W4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/abilities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_habilidade',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AbilityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\AbilityController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/abilities',
        'where' => 
        array (
        ),
        'as' => 'generated::6zI1fGQMccBn30W4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BeOR32jVISG70hei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::BeOR32jVISG70hei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wi7X8qdouksGnciK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/list_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@listUsers',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@listUsers',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Wi7X8qdouksGnciK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zKKo1DQaEIWdf5A3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::zKKo1DQaEIWdf5A3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lE8mwzAmeLqu9fVO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::lE8mwzAmeLqu9fVO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ot4CAOydzji5v5qZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/users/{user}/profiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_perfil',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@storeProfiles',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@storeProfiles',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Ot4CAOydzji5v5qZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EvpVNIN7bQ97IK1P' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::EvpVNIN7bQ97IK1P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFn1geZFZwfTPat1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::LFn1geZFZwfTPat1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EYvRhzjq6ICQWDnX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@restore',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@restore',
        'namespace' => NULL,
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::EYvRhzjq6ICQWDnX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VYs0hIJSV4cWsjUb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::VYs0hIJSV4cWsjUb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NLT4Nioltn9Senqv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses/list_addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@listAddresses',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@listAddresses',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::NLT4Nioltn9Senqv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7yuuTcLUHRxBE3iM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@show',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::7yuuTcLUHRxBE3iM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l8ufiQddbursFiR1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::l8ufiQddbursFiR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gKMPU3ycRhUrZtdc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::gKMPU3ycRhUrZtdc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i4Ah6pTnLtfm8d9q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/addresses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::i4Ah6pTnLtfm8d9q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7bQSNyLGGookeEik' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/addresses/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@restore',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@restore',
        'namespace' => NULL,
        'prefix' => 'api/addresses',
        'where' => 
        array (
        ),
        'as' => 'generated::7bQSNyLGGookeEik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJmp60C63CbzkwRx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/election_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@index',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::CJmp60C63CbzkwRx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::19azQqouuP32NNGf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/election_types/list_election_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@listElectionTypes',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@listElectionTypes',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::19azQqouuP32NNGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sGzRcbI8SPv0Ywmi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/election_types/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@show',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::sGzRcbI8SPv0Ywmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ckyZyBN8jcXpEFwK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/election_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::ckyZyBN8jcXpEFwK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KlYQrBNyovN5Rvwn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/election_types/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::KlYQrBNyovN5Rvwn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JCJKNcG6hFnra3wH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/election_types/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::JCJKNcG6hFnra3wH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::htE8Ixfiobwsx1Av' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/election_types/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@restore',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionTypeController@restore',
        'namespace' => NULL,
        'prefix' => 'api/election_types',
        'where' => 
        array (
        ),
        'as' => 'generated::htE8Ixfiobwsx1Av',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f0OsqrebJPAFP04O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_faqs',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FaqController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\FaqController@show',
        'namespace' => NULL,
        'prefix' => 'api/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::f0OsqrebJPAFP04O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oVAr5Y0ffAB30gGJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_faqs',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FaqController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\FaqController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::oVAr5Y0ffAB30gGJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZLqLkbZaT4GzdE0M' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_faqs',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FaqController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\FaqController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::ZLqLkbZaT4GzdE0M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r5cVvnlk7zZbW2Ly' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_faqs',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FaqController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\FaqController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::r5cVvnlk7zZbW2Ly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qrjolMhHcVmNHJXt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005e80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qrjolMhHcVmNHJXt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
