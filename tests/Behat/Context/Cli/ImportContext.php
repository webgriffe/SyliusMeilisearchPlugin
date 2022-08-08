<?php

declare(strict_types=1);

namespace Tests\Webgriffe\SyliusMeilisearchPlugin\Behat\Context\Cli;

use Behat\Behat\Context\Context;
use MeiliSearch\Bundle\Command\MeiliSearchImportCommand;
use Symfony\Component\Console\Tester\CommandTester;

final class ImportContext implements Context
{
    private MeiliSearchImportCommand $meiliSearchImportCommand;
    private CommandTester $commandTester;

    public function __construct(MeiliSearchImportCommand $meiliSearchImportCommand)
    {
        $this->meiliSearchImportCommand = $meiliSearchImportCommand;
    }

    /**
     * @When /^I import all Meilisearch indexes$/
     */
    public function iImportAllMeilisearchIndexes()
    {
        $this->commandTester = new CommandTester($this->meiliSearchImportCommand);
        $this->commandTester->execute([]);
        $this->commandTester->assertCommandIsSuccessful();
    }
}
