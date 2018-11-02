<?php

require 'app/bootstrap.php';

$capture = new \vendor\capture\capture;

$capture->load('resume.php' , []);

$view = new \vendor\views\view;
echo $view->render('resume.php');
