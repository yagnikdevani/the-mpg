<?php
if (!function_exists('env_asset')) {
    function env_asset($path)
    {
        $basePath = app()->environment('local') ? '' : 'public/';
        return asset($basePath . $path);
    }
}