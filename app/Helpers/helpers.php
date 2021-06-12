<?php

/**
 * @param $type
 * @return int|mixed
 */
function m_per_page($type = 'per_page')
{
    if (session()->has($type)) {
        return session()->get($type);
    }
    return $perPage = 20;
}

/**
 * @return mixed
 */
function m_locale()
{
    return \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
}

if (!function_exists('generate_random_string')) {
    function generate_random_string($length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}



