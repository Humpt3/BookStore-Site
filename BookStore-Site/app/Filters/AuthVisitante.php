<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthVisitante implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session('id_perfil') != null) {
            return redirect()->to(base_url('/inicioSession'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}