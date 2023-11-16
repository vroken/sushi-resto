<?php

namespace App\Enums;

enum TableLocation: string
{
    case Dalam = 'inside';
    case Luar = 'outside';

    public static function getValues(): array
    {
        return [
            self::Dalam,
            self::Luar,
        ];
    }
}
