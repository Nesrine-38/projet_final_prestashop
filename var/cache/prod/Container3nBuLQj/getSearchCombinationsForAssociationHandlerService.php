<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\SearchCombinationsForAssociationHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\QueryHandler\\SearchCombinationsForAssociationHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\SearchCombinationsForAssociationHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $this->load('getProductImagePathFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Product\\Combination\\NameBuilder\\CombinationNameBuilderInterface'] ?? $this->load('getCombinationNameBuilderInterfaceService.php')));
