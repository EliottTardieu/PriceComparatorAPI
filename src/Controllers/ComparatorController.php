<?php

namespace PriceComparator\Controllers;

class ComparatorController {

    function compare(string $article): void {
        //TODO call diff controllers
        $prices = array();
        $prices['Amazon'] = AmazonController::getPrice($article);
    }
}