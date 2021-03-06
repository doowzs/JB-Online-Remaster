<?php

namespace App\Http\Controllers;

class APIController extends Controller
{
    /**
     * @var \Parsedown
     */
    protected $parser;

    /**
     * APIController constructor.
     */
    public function __construct()
    {
        $this->parser = new \Parsedown();
    }

    /**
     * Package data with OK(200) status
     *
     * @param $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function data($data)
    {
        return response()->json($data, 200);
    }

    /**
     * Package data with created(201) status
     *
     * @param $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function created($data)
    {
        return response()->json($data, 201);
    }

    /**
     * Package data with no-content(204) status
     *
     * @param $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function deleted()
    {
        return response(null, 204);
    }

    /**
     * Package JSON error message with specific status code.
     *
     * @param $message
     * @param $status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error($message, $status)
    {
        return response()->json($message, $status);
    }
}
