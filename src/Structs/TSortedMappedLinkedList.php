<?php

namespace Smoren\Containers\Transactional\Structs;


use Exception;
use Smoren\Containers\Structs\LinkedList;
use Smoren\Containers\Structs\SortedMappedLinkedList;
use Smoren\Containers\Transactional\Base\TransactionWrapper;

/**
 * Class TSortedMappedLinkedList
 * Wraps SortedMappedLinkedList
 * @see \Smoren\Containers\Structs\SortedMappedLinkedList
 */
class TSortedMappedLinkedList extends TransactionWrapper
{
    /**
     * @inheritDoc
     * @return LinkedList
     */
    public function getWrapped(): SortedMappedLinkedList
    {
        return parent::getWrapped();
    }

    /**
     * @inheritDoc
     * @return SortedMappedLinkedList
     * @throws Exception
     */
    protected function getDefaultWrapped()
    {
        return new SortedMappedLinkedList();
    }

    /**
     * @inheritDoc
     */
    protected function getWrappedType(): ?string
    {
        return SortedMappedLinkedList::class;
    }
}
