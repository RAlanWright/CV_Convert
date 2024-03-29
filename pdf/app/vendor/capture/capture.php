<?php

namespace vendor\capture;

use vendor\Views\View;
use Symfony\Component\Process\Process;
use Symfony\Component\HttpFoundation\Response;

class capture
{
  protected $view;

  protected $pdf;

  public function __construct()
  {
    $this->view = new View;
  }

  public function load($filename, array $data = [])
  {
    $view = $this->view->render($filename, $data);

    $this->pdf = $this->captureImage($view);
  }

  protected function captureImage($view)
  {
    $path = $this->writeFile($view);

    $this->phantomProcess($path)->setTimeout(10)->mustRun();
  }

  protected function writeFile($view)
  {
    file_put_contents($path = 'storage/' .md5(uniqid()) . '.pdf' , $view);

    return $path;
  }

  protected function phantomProcess($path)
  {
    return new Process('bin/phantomjs capture.js ' . $path);
  }
}
