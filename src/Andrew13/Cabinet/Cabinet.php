<?php namespace Andrew13\Cabinet;

use Illuminate\View\Environment;
use Illuminate\Config\Repository;
use InvalidArgumentException;

class Cabinet
{
    /**
     * Laravel application
     *
     * @var Illuminate\Foundation\Application
     */
    public $app;

    /**
     * Create a new cabinet instance.
     *
     * @return \Andrew13\Cabinet\Cabinet
     */
    public function __construct()
    {
        $this->app = app();
    }

    /**
     * Returns the Laravel application
     *
     * @return Illuminate\Foundation\Application
     */
    public function app()
    {
        return $this->app;
    }

    /**
     * Display the default upload view
     *
     * @deprecated
     * @return Illuminate\View\View
     */
    public function makeUploadForm()
    {
        return $this->app['view']->make($this->app['config']->get('cabinet::upload_form'));
    }
}
