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
            '_route' => 'generated::ZUgclRT30gPiDyuO',
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
            '_route' => 'generated::WuKnCy2bWREyK44P',
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
            '_route' => 'generated::6q7GaOmGaWv6lXtX',
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
            '_route' => 'generated::KDmToNZva5hHY0mw',
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
            '_route' => 'generated::iScFJQ3Iuz6ZRTtb',
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
            '_route' => 'generated::oSP1XKAwf0tTFGsm',
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
            '_route' => 'generated::6MNSdEbb6LGwE0lb',
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
            '_route' => 'generated::0mHbQqlFVYiRUmHQ',
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
            '_route' => 'generated::wJm5vpQtCF0HmAR1',
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
            '_route' => 'generated::iOAaePvz6eHYQvaG',
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
            '_route' => 'generated::2FmqgxtKpqoD60AU',
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
            '_route' => 'generated::8a4CzWUAe71DqrRw',
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
            '_route' => 'generated::58X1Ta5GDPEyBPns',
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
            '_route' => 'generated::h8IlJVk4xC6m3NOl',
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
            '_route' => 'generated::WNOGUK2i7KzCnDZp',
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
      '/api/elections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JELM0spOP25zy2qF',
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
            '_route' => 'generated::46v0UOqYEGlsUPok',
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
      '/api/elections/list_elections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h2cDYQ5e2FIdbqtt',
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
            '_route' => 'generated::amgxL7SFPfVL8wBz',
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
      0 => '{^(?|/captcha(?|/api(?:/([^/]++))?(*:36)|(?:/([^/]++))?(*:57))|/api/(?|profiles/([^/]++)(?|(*:93)|/abilities(?|(*:113))|(*:122)|(*:130))|a(?|bilities/([^/]++)(?|(*:163))|ddresses/(?|([^/]++)(?|(*:195))|restore/([^/]++)(*:220)))|users/(?|([^/]++)(?|(*:250)|/profiles(*:267)|(*:275))|restore/([^/]++)(*:300))|election(?|_types/(?|([^/]++)(?|(*:341))|restore/([^/]++)(*:366))|s/(?|([^/]++)(?|(*:391))|restore/([^/]++)(*:416)))|faqs/([^/]++)(?|(*:442))))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cg0KlBCvyl8GPob2',
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
            '_route' => 'generated::SAIxQSyyoBSw88fk',
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
            '_route' => 'generated::eyTa1Rvw0zq4ZPiF',
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
            '_route' => 'generated::pmSe1lv7F3Adkwd4',
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
            '_route' => 'generated::A1FqNdk5wYdPifpU',
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
            '_route' => 'generated::UlenbN0htM4JUTTP',
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
            '_route' => 'generated::k4bOyQmKtnYEv07f',
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
            '_route' => 'generated::54DX8O67xsFfKUVo',
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
            '_route' => 'generated::PEBymlpJwuBinwic',
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
            '_route' => 'generated::vzDr23tFkaVwFnsH',
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
            '_route' => 'generated::jmp4g7F5jPa3SVEc',
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
            '_route' => 'generated::HIduqYr6FxctKvHm',
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
            '_route' => 'generated::d2b0hocvAXmFgBvd',
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
            '_route' => 'generated::uYNG3NA7dbO5Z61v',
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
      341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qd076xsTSoHlxOnj',
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
            '_route' => 'generated::3yK3JIkubKu3LrFC',
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
            '_route' => 'generated::tasORfEv3JZZVDTe',
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
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sHJv8Rh9EK3lL5mx',
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
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yjz63CARkoQGvdvw',
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
            '_route' => 'generated::NB8liGyp8jFIKaNg',
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
            '_route' => 'generated::gn2X96Cj4iMSe6QN',
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
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZdmYcK065CD5bvHW',
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
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P3xsPMLFjdBg3c53',
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
            '_route' => 'generated::rPIJYxSiaZX4nnc1',
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
            '_route' => 'generated::5imJa7xHUHYYvrtm',
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
    'generated::cg0KlBCvyl8GPob2' => 
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
        'as' => 'generated::cg0KlBCvyl8GPob2',
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
    'generated::SAIxQSyyoBSw88fk' => 
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
        'as' => 'generated::SAIxQSyyoBSw88fk',
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
    'generated::ZUgclRT30gPiDyuO' => 
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
        'as' => 'generated::ZUgclRT30gPiDyuO',
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
    'generated::6q7GaOmGaWv6lXtX' => 
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
        'as' => 'generated::6q7GaOmGaWv6lXtX',
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
    'generated::KDmToNZva5hHY0mw' => 
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
        'as' => 'generated::KDmToNZva5hHY0mw',
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
    'generated::iScFJQ3Iuz6ZRTtb' => 
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
        'as' => 'generated::iScFJQ3Iuz6ZRTtb',
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
    'generated::eyTa1Rvw0zq4ZPiF' => 
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
        'as' => 'generated::eyTa1Rvw0zq4ZPiF',
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
    'generated::oSP1XKAwf0tTFGsm' => 
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
        'as' => 'generated::oSP1XKAwf0tTFGsm',
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
    'generated::pmSe1lv7F3Adkwd4' => 
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
        'as' => 'generated::pmSe1lv7F3Adkwd4',
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
    'generated::A1FqNdk5wYdPifpU' => 
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
        'as' => 'generated::A1FqNdk5wYdPifpU',
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
    'generated::6MNSdEbb6LGwE0lb' => 
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
        'as' => 'generated::6MNSdEbb6LGwE0lb',
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
    'generated::wJm5vpQtCF0HmAR1' => 
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
        'as' => 'generated::wJm5vpQtCF0HmAR1',
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
    'generated::vzDr23tFkaVwFnsH' => 
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
        'as' => 'generated::vzDr23tFkaVwFnsH',
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
    'generated::0mHbQqlFVYiRUmHQ' => 
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
        'as' => 'generated::0mHbQqlFVYiRUmHQ',
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
    'generated::jmp4g7F5jPa3SVEc' => 
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
        'as' => 'generated::jmp4g7F5jPa3SVEc',
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
    'generated::HIduqYr6FxctKvHm' => 
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
        'as' => 'generated::HIduqYr6FxctKvHm',
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
    'generated::d2b0hocvAXmFgBvd' => 
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
        'as' => 'generated::d2b0hocvAXmFgBvd',
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
    'generated::uYNG3NA7dbO5Z61v' => 
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
        'as' => 'generated::uYNG3NA7dbO5Z61v',
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
    'generated::iOAaePvz6eHYQvaG' => 
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
        'as' => 'generated::iOAaePvz6eHYQvaG',
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
    'generated::8a4CzWUAe71DqrRw' => 
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
        'as' => 'generated::8a4CzWUAe71DqrRw',
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
    'generated::UlenbN0htM4JUTTP' => 
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
        'as' => 'generated::UlenbN0htM4JUTTP',
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
    'generated::2FmqgxtKpqoD60AU' => 
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
        'as' => 'generated::2FmqgxtKpqoD60AU',
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
    'generated::k4bOyQmKtnYEv07f' => 
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
        'as' => 'generated::k4bOyQmKtnYEv07f',
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
    'generated::54DX8O67xsFfKUVo' => 
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
        'as' => 'generated::54DX8O67xsFfKUVo',
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
    'generated::PEBymlpJwuBinwic' => 
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
        'as' => 'generated::PEBymlpJwuBinwic',
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
    'generated::58X1Ta5GDPEyBPns' => 
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
        'as' => 'generated::58X1Ta5GDPEyBPns',
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
    'generated::WNOGUK2i7KzCnDZp' => 
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
        'as' => 'generated::WNOGUK2i7KzCnDZp',
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
    'generated::Qd076xsTSoHlxOnj' => 
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
        'as' => 'generated::Qd076xsTSoHlxOnj',
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
    'generated::h8IlJVk4xC6m3NOl' => 
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
        'as' => 'generated::h8IlJVk4xC6m3NOl',
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
    'generated::3yK3JIkubKu3LrFC' => 
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
        'as' => 'generated::3yK3JIkubKu3LrFC',
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
    'generated::tasORfEv3JZZVDTe' => 
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
        'as' => 'generated::tasORfEv3JZZVDTe',
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
    'generated::sHJv8Rh9EK3lL5mx' => 
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
        'as' => 'generated::sHJv8Rh9EK3lL5mx',
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
    'generated::JELM0spOP25zy2qF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@index',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::JELM0spOP25zy2qF',
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
    'generated::h2cDYQ5e2FIdbqtt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/elections/list_elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@listElections',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@listElections',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::h2cDYQ5e2FIdbqtt',
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
    'generated::Yjz63CARkoQGvdvw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/elections/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:list_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@show',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::Yjz63CARkoQGvdvw',
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
    'generated::46v0UOqYEGlsUPok' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@beforeStore',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@beforeStore',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::46v0UOqYEGlsUPok',
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
    'generated::NB8liGyp8jFIKaNg' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/elections/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:cad_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@beforeUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@beforeUpdate',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::NB8liGyp8jFIKaNg',
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
    'generated::gn2X96Cj4iMSe6QN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/elections/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::gn2X96Cj4iMSe6QN',
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
    'generated::ZdmYcK065CD5bvHW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/elections/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'refreshTokenSanctum',
          3 => 'abilities:del_usuario',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ElectionController@restore',
        'controller' => 'App\\Http\\Controllers\\Api\\ElectionController@restore',
        'namespace' => NULL,
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::ZdmYcK065CD5bvHW',
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
    'generated::P3xsPMLFjdBg3c53' => 
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
        'as' => 'generated::P3xsPMLFjdBg3c53',
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
    'generated::WuKnCy2bWREyK44P' => 
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
        'as' => 'generated::WuKnCy2bWREyK44P',
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
    'generated::rPIJYxSiaZX4nnc1' => 
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
        'as' => 'generated::rPIJYxSiaZX4nnc1',
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
    'generated::5imJa7xHUHYYvrtm' => 
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
        'as' => 'generated::5imJa7xHUHYYvrtm',
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
    'generated::amgxL7SFPfVL8wBz' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005e50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::amgxL7SFPfVL8wBz',
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
