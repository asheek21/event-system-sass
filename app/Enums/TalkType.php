<?php

namespace App\Enums;

enum TalkType:string
{
    case MOM = 'mom';
    case standard = 'standard';
    case keynote = 'keynote';

    public function getLabel()
    {
        return match ($this) {
            self::MOM => 'Minutes of Meeting',
            self::standard => 'Standard',
            self::keynote => 'Keynote',
        };
    }
}
