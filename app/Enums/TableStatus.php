<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Tersedia = 'available';
    case Kosong = 'unavailable';

    public static function getValues(): array
    {
        return [
            self::Pending,
            self::Tersedia,
            self::Kosong,
        ];
    }
}
