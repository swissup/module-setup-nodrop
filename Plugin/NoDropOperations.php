<?php

namespace Swissup\SetupNodrop\Plugin;

use Magento\Framework\Setup\Declaration\Schema\Diff\DiffInterface;
use Magento\Framework\Setup\Declaration\Schema\Dto\ElementInterface;

class NoDropOperations
{
    public function afterCanBeRegistered(
        DiffInterface $subject,
        bool $result,
        ElementInterface $object,
        $operation
    ) {
        return $result && !in_array($operation, [
            'drop_element',
            'drop_reference',
            'drop_table',
        ]);
    }
}
