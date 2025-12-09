<?php

class BaseController
{
    public static function route(): void
    {
        echo "Routing di BaseController\n";
    }

    public static function handle(): void
    {
        static::route(); // late static binding
    }
}

class UserController extends BaseController
{
    public static function route(): void
    {
        echo "Routing di UserController\n";
    }
}

class AdminController extends UserController
{
    public static function route(): void
    {
        echo "Routing di AdminController\n";
    }
}

UserController::handle();

AdminController::handle();
