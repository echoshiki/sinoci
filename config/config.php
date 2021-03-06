<?php

// 引入 初始配置
require_once dirname(BASEPATH) . '/application/config/config.php';

// 配置 composer 自动加载
$config['composer_autoload'] = true;

// 配置 错误提示模版目录
$config['error_views_path'] = dirname(BASEPATH) . '/application/views/errors/';

// 配置 缓存目录
$config['cache_path'] = APPPATH . 'storage/cache/';

// 配置 日志目录
$config['log_path'] = APPPATH . 'storage/logs/';

// 配置 会话目录
$config['sess_save_path'] = APPPATH . 'storage/sessions/';

// 设置私有密钥
$config['encryption_key'] = '^encryption_key$';

// 开启 钩子系统
$config['enable_hooks'] = true;

// 启用 Eloquent ORM
$config['enable_eloquent'] = false;
