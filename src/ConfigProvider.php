<?php

declare(strict_types=1);

namespace SwooleTW\Hyperf\Devtool;

use Hyperf\Support\Composer;
use SwooleTW\Hyperf\Devtool\Generator\ComponentCommand;
use SwooleTW\Hyperf\Devtool\Generator\ConsoleCommand;
use SwooleTW\Hyperf\Devtool\Generator\EventCommand;
use SwooleTW\Hyperf\Devtool\Generator\ListenerCommand;
use SwooleTW\Hyperf\Devtool\Generator\ProviderCommand;
use SwooleTW\Hyperf\Devtool\Generator\RuleCommand;
use SwooleTW\Hyperf\Devtool\Generator\SessionTableCommand;
use SwooleTW\Hyperf\Devtool\Generator\TestCommand;

class ConfigProvider
{
    public function __invoke(): array
    {
        if (! Composer::hasPackage('hyperf/devtool')) {
            return [];
        }

        return [
            'commands' => [
                ProviderCommand::class,
                EventCommand::class,
                ListenerCommand::class,
                ComponentCommand::class,
                TestCommand::class,
                SessionTableCommand::class,
                RuleCommand::class,
                ConsoleCommand::class,
            ],
        ];
    }
}
