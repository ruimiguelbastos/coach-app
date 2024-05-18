<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JsonSerializable;

class Exercise extends Model implements JsonSerializable
{
    use HasFactory;

    protected const types = [
        'barbell'      => 'Barbell',
        'dumbbell'     => 'Dumbbell',
        'machine'      => 'Machine',
        'smithmachine' => 'Smith Machine',
        'cables'       => 'Cables',
        'bodyweight'   => 'Bodyweight',
    ];

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'info' => ucfirst($this->bodypart) . ', ' . self::types[$this->type],
        ];
    }

}
