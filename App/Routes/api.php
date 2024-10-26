<?php


$cms->router->mount('/api', function() use ($cms) {

    // will result in '/movies/'
    $cms->router->get('/user', function() {
        echo 'api user';
    });

    $cms->router->get('user/detail/(\d+)', 'User@showProfile');
});