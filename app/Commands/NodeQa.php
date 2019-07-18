<?php

namespace App\Commands;

use App\Commands\Traits\HasDynamicArgs;
use App\Builder\NodeQa as NodeQaBuilder;

class NodeQa extends Command
{
    use HasDynamicArgs;

    /**
     * The name of the command.
     *
     * @var string
     */
    protected $name = 'node-qa';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Run shell commands in the NODE-QA container.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->commandExecutor->run(
            NodeQaBuilder::make($this->getArgs())
        );
    }

    /**
     * Get default args when empty.
     *
     * @return string
     */
    public function getDefaultArgs(): string
    {
        return 'node -v';
    }
}
