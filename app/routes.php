<?php

$router->map('GET', '/', 'welcome#index', 'root');
$router->map('GET', '/welcome', 'welcome#index', 'welcome_index');
