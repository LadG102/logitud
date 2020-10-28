<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ConfigTwig
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('App/Views/templates');
        $this->twig = new Environment($this->loader, []);
        return $this->twig;
    }
}
