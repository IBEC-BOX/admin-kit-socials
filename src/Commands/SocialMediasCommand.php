<?php

namespace AdminKit\SocialMedias\Commands;

use Illuminate\Console\Command;

class SocialMediasCommand extends Command
{
    public $signature = 'admin-kit-social-medias';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
