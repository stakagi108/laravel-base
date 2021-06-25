<?php


namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use App\Enums\Role as RoleEnum;

class Role extends SpatieRole
{
    public function getDescriptionAttribute(): string
    {
        $name = $this->name;
        $description = RoleEnum::getDescription($name);

        return $description !== '' ? $description : $name;
    }

    public function isSystemDefined(): bool
    {
        return RoleEnum::hasValue($this->name);
    }

    public function isAdmin(): bool
    {
        return $this->name === 'admin';
    }

    public function isSuperAdmin(): bool
    {
        return $this->name === 'super_admin';
    }
}