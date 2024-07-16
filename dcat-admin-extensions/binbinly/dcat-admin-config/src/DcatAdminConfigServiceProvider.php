<?php

namespace Dcat\Admin\Config;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatAdminConfigServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

    // 定义菜单
    protected $menu = [
        [
            'title' => 'config',
            'uri'   => 'auth/config',
            'icon'  => '', // 图标可以留空
        ],
        [
            'title' => 'config_group',
            'uri'   => 'auth/config_group',
            'icon'  => '', // 图标可以留空
        ],
    ];

	public function settingForm()
	{
		return new Setting($this);
	}
}
