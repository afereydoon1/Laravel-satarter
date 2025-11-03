<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;  // Integrated with Spatie Laravel Permission

class User extends Authenticatable
{
    protected $table = 'users';

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;  // HasRoles added for Spatie role support

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',  // New field for user type (tinyInteger: 0=user, 1=admin, etc.)
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'user_type' => 'integer',  // Cast as integer (avoid boolean for scalability)
        ];
    }

    /**
     * Redirect path after login based on user_type.
     *
     * @return string
     */
    public function getRedirectAfterLogin(): string
    {
        return match ($this->user_type) {
            1 => '/admin-dashboard',
            // 2 => '/agent-dashboard',
            default => '/',
        };
    }

    /**
     * Helper method to check user_type (separate from Spatie hasRole).
     *
     * @param int $type
     * @return bool
     */
    public function isUserType(int $type): bool
    {
        return $this->user_type === $type;
    }

    /**
     * Example: Combine user_type with Spatie roles for access control
     * (can be used in middleware or controllers).
     *
     * @return bool
     */
    public function canAccessAdmin(): bool
    {
        return $this->isUserType(1) || $this->hasRole('admin');  // Fallback to Spatie role
    }
}
