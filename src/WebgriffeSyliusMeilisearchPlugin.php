<?php

declare(strict_types=1);

namespace Webgriffe\SyliusMeilisearchPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class WebgriffeSyliusMeilisearchPlugin extends Bundle
{
    use SyliusPluginTrait;
}
