<?php

namespace PriceComparator\Controllers;

use AgileBundle\Controllers\AbstractFrontController;

abstract class CompaniesController extends AbstractFrontController {

    abstract static function getPrice(string $article): float;
}