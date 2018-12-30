<?php

namespace ddd\Test\Event;

use ddd\Event\BasicDomainEvent;
use ddd\Event\DomainEvent;
use ddd\Identity\IdentifiesAnAggregate;

class AnotherDomainEvent implements DomainEvent
{
    use BasicDomainEvent;

    public function __construct(IdentifiesAnAggregate $aggregateId)
    {
        $this->initializeTheEvent($aggregateId);
    }
}