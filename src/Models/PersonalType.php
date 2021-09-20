<?php

namespace KatalinKS\PersonType\Models;

use Illuminate\Database\Eloquent\Model;
use KatalinKS\PersonType\Contract\PersonalType as PersonalTypeContract;

class PersonalType extends Model implements PersonalTypeContract
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'abbreviation',
        'type',
    ];

    public function getType(): string
    {
        return $this->getOriginal('type');
    }

    public function getName(): string
    {
        return $this->getOriginal('name');
    }

    public function getAbbreviation(): string
    {
        return $this->getOriginal('abbreviation');
    }

    public function getId(): int
    {
        return $this->getOriginal('id');
    }
}
