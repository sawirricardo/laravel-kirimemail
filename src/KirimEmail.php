<?php

namespace Sawirricardo\LaravelKirimemail;

use Illuminate\Support\Facades\Http;

class Kirimemail
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function transactionalClient()
    {
        return Http::asForm()
            ->throw()
            ->withBasicAuth($this->config['username'], $this->config['password'])
            ->when($this->config['domain'], function ($http) {
                return $http->withHeaders(['domain' => $this->config['domain']]);
            })
            ->baseUrl('https://aplikasi.kirim.email/api/v3/transactional');
    }
}
