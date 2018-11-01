<?php

require 'app/bootstrap.php';

$capture = new \vendor\capture\capture;

$capture->load('resume.php' , [
  'order' => '123456',
  'name' => 'Dale Garrett',
  'amount' => 49.69,
]);

// $view = new \vendor\views\view;
// echo $view->render('resume.php');
