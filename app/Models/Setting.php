<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'key',
        'value'
    ];

    public static function getValue(string $key): string|null
    {
        return self::where('key', $key)->first()?->value ?: null;
    }
}
