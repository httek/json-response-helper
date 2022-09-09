<?php

use HTTek\Foundation\JsonResponse;

if (! function_exists('ok'))
{
    /**
     * @param string $message
     * @param int $code
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function ok(string $message = 'OK', int $code = 2000, $data = null) {
        return JsonResponse::make($data, $message, $code);
    }
}

if (! function_exists('fail'))
{
    /**
     * @param string $message
     * @param int $code
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function fail(string $message = 'Fail', int $code = 5000, $data = null) {
        return JsonResponse::make($data, $message, $code);
    }
}

if (! function_exists('error'))
{
    /**
     * @param int $code
     * @param string $message
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function error(string $message = 'Fail', int $code = 5000, $data = null) {
        return JsonResponse::make($data, $message, $code);
    }
}

if (! function_exists('success'))
{
    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function success($data = null, string $message = 'OK', int $code = 2000) {
        return JsonResponse::make($data, $message, $code);
    }
}