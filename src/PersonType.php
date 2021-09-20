<?php

namespace KatalinKS\PersonType;

use KatalinKS\PersonType\Contract\PersonalType;

class PersonType
{
    public function __construct(
        private PersonType $model
    )
    {
    }

    public function getType(int $id): string
    {
        return $this->get($id)->getType();
    }

    public function get(int $id): PersonalType
    {
        return $this->model->find($id);
    }
}
