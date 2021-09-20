<?php

namespace KatalinKS\PersonType\Contract;

interface PersonalType
{
    public function getType(): string;

    public function getName(): string;

    public function getAbbreviation(): string;
}
