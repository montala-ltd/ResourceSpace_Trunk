<?php

declare (strict_types=1);
namespace RectorPrefix202411;

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;
use Rector\Php83\Rector\FuncCall\CombineHostPortLdapUriRector;
use Rector\Php83\Rector\FuncCall\RemoveGetClassGetParentClassNoArgsRector;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->rules([AddOverrideAttributeToOverriddenMethodsRector::class, AddTypeToConstRector::class, CombineHostPortLdapUriRector::class, RemoveGetClassGetParentClassNoArgsRector::class]);
};
