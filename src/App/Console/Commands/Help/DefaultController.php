<?php

declare(strict_types=1);

namespace App\Console\Commands\Help;

use Minicli\App;
use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    protected array $command_map = [];

    public function boot(App $app): void
    {
        parent::boot(
            app: $app,
        );

        $this->command_map = $app->command_registry->getCommandMap();
    }

    /**
     * @inheritDoc
     */
    public function handle()
    {
        $this->getPrinter()->info('Available Commands');

        foreach ($this->command_map as $command => $sub) {

            $this->getPrinter()->newline();
            $this->getPrinter()->out($command, 'info_alt');

            if (is_array($sub)) {
                foreach ($sub as $subcommand) {
                    if ($subcommand !== 'default') {
                        $this->getPrinter()->newline();
                        $this->getPrinter()->out(sprintf('%s%s','└──', $subcommand));
                    }
                }
            }
            $this->getPrinter()->newline();
        }

        $this->getPrinter()->newline();
        $this->getPrinter()->newline();
    }
}