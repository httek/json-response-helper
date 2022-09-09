<?php

namespace HTTek\Foundation;

use Symfony\Component\HttpFoundation\JsonResponse as Response;

class JsonResponse
{
    /**
     * @param array $data
     * @param string $message
     * @param int $code
     * @param int $status
     * @param array $headers
     * @return Response
     */
    public static function make($data = [], string $message = 'OK', int $code = 2000, int $status = Response::HTTP_OK, array $headers = [])
    {
        return new Response([
            'code' => $code, 'data' => $data, 'msg' => $message, 'timestamp' => time()
        ], $status, $headers);
    }
}
