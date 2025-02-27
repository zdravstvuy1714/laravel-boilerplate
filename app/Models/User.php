<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * [Attributes]
 * @property int $id
 * @property string $email
 * @property string $password
 * @property CarbonImmutable $created_at
 * @property CarbonImmutable $updated_at
 */
class User extends Authenticatable
{
    protected $connection = 'pgsql';

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;

    protected $hidden = [
        'password',
    ];
}
