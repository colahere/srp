<?php

return [
    'srp' => [
        'name' => 'SRP',
        'icon' => 'fas fa-rocket',
        'route_segment' => 'srp',
        'permission' => 'srp.request',
        'entries' => [
            [
                'name' => 'SRP申请',
                'icon' => 'fas fa-medkit',
                'route' => 'srp.request',
                'permission' => 'srp.request',
            ],
            [
                'name' => 'SRP批准',
                'icon' => 'fas fa-gavel',
                'route' => 'srpadmin.list',
                'permission' => 'srp.settle',
            ],
            [
                'name' => 'SRP统计',
                'icon' => 'fas fa-chart-bar',
                'route' => 'srp.metrics',
                'permission' => 'srp.settle',
            ],
            [
                'name' => 'SRP规则设置',
                'icon' => 'fas fa-cogs',
                'route' => 'srp.settings',
                'permission' => 'srp.settings',
            ],
            [
                'name' => 'SRP测试页面',
                'icon' => 'fas fa-vial',
                'route' => 'srp.testsrp',
                'permission' => 'srp.settings',
            ],
            [
                'name' => '介绍',
                'icon' => 'fas fa-book-open',
                'route' => 'srp.instructions',
                'permission' => 'srp.request',
            ],
            [
                'name' => '关于',
                'icon' => 'fas fa-info',
                'route' => 'srp.about',
                'permission' => 'srp.request',
            ],
        ],
    ],
];
