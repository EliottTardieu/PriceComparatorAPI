<?php /** @noinspection PhpArrayKeyDoesNotMatchArrayShapeInspection */

/** @noinspection PhpArrayShapeAttributeCanBeAddedInspection */

namespace PriceComparator\Controllers;

use AgileBundle\Controllers\AbstractRouter;

class Router extends AbstractRouter {

    protected static function getDomain(): string {
        return PUBLIC_DOMAIN;
    }

    protected static function getRelativeDir(): string {
        return RELATIVE_DIR_API;
    }

    protected static function getControllerClass(): string {
        return Controller::class;
    }

    protected static function getRoutes(): array {
        return [
            'comparator'                                   => ["GET", "/compare/{article_name}", [AuthController::class, "register"]], // Tested
            'app_register_payment'                         => ["POST", "/register/payment", [AuthController::class, "registerPayment"]], // Tested
            'app_init_token'                               => ["GET", "/token/{hashed_uid}", [TokenController::class, "generateTokenFromHash"]], // Tested
            'app_edit_user'                                => ["POST", "/edit", [AuthController::class, "edit"]], // Tested
            'app_disable_user'                             => ["POST", "/disable", [AuthController::class, "disable"]], // Tested
            'app_register_list'                            => ["POST", "/list/validate", [ListController::class, "register"]], // Tested
            'app_user_lists'                               => ["GET", "/list/{hashed_uid}", [ListController::class, "getListsPerUserID"]], // Tested
            'app_articles_list'                            => ["GET", "/articles/{hashed_uuid}", [ArticleController::class, "getListContent"]], // Tested
            'app_get_articles'                             => ["GET", "/articles", [ArticleController::class, "getAll"]], // Tested
            'printer_verification'                         => ["POST", "/verify", [PrinterController::class, "verify"]] // Tested
        ];
    }
}