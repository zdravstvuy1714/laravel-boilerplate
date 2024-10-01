<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Attributes
 * @property int $id
 * @property string $email
 * @property string $password
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
final class User extends Authenticatable
{
    protected $hidden = ['password'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
