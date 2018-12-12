<?php

declare(strict_types=1);

namespace Setono\SyliusAnalyticsPlugin\Repository;

use Setono\SyliusAnalyticsPlugin\Model\GoogleAnalyticConfigInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface AnalyticConfigRepositoryInterface extends RepositoryInterface
{
    public function findConfig(): ?GoogleAnalyticConfigInterface;
}
