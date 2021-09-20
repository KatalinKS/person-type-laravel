<?php

namespace KatalinKS\PersonType\Commands;

use Illuminate\Console\Command;

class PersonTypeCommand extends Command
{
    public $signature = 'person-type-laravel';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
