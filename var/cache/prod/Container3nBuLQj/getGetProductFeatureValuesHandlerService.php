<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\FeatureValue\QueryHandler\GetProductFeatureValuesHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\QueryHandler\\GetProductFeatureValuesHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\QueryHandler\GetProductFeatureValuesHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureValueRepository'] ?? $this->load('getFeatureValueRepositoryService.php')));
