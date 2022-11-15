<?php

namespace Sawirricardo\LaravelKirimemail;

use Illuminate\Support\Facades\Mail;
use Sawirricardo\LaravelKirimemail\Facades\LaravelKirimemail;
use Sawirricardo\LaravelKirimEmail\Transports\KirimemailTransport;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KirimemailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-kirimemail')
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        $this->app->singleton(LaravelKirimemail::class, function ($app) {
            return new Kirimemail($app['config']->get('kirimemail'));
        });

        Mail::extend('kirim-email', function () {
            return new KirimemailTransport(LaravelKirimemail::transactionalClient());
        });
    }
}
