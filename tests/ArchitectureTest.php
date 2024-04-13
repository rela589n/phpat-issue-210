<?php

declare(strict_types=1);

namespace Rela589n\PhpatIssue210\Tests;

use PHPat\Selector\ClassNamespace;
use PHPat\Selector\Selector;
use PHPat\Test\Builder\Rule;
use PHPat\Test\PHPat;

final class ArchitectureTest
{
    public function testHandlerDependencies(): Rule
    {
        return PHPat::rule()
            ->classes($this->exceptionHandler())
            ->canOnlyDependOn()
            ->classes($this->exceptionHandler());
    }

    public function exceptionHandler(): ClassNamespace
    {
        return Selector::inNamespace('Rela589n\PhpatIssue210\Handler');
    }
}
