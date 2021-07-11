<?php

namespace App\Restql\Authorizers;

use Restql\Authorizer;

final class UserAuthorizer extends Authorizer
{
    /**
     * Can get one or more author resources.
     *
     * @param  array $clausules
     * @return bool
     */
    public static function get(array $clausules = []): bool
    {
        // You could replace this with permission checks or validations.
        return true;
    }
}
