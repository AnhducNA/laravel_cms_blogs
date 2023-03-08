<?php

namespace Src\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Src\Contracts\LoginViewResponse;

class SimpleViewResponse implements LoginViewResponse
{
    protected $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function toResponse($request)
    {
        if (!is_callable($this->view) || is_string($this->view)) {
            return view($this->view, ['request' => $request]);
        }

        $response = call_user_func($this->view, $request);

        if ($response instanceof Responsable) {
            return $response->toResponse($request);
        }

        return $response;
    }
}
