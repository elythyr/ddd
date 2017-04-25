<?php

namespace Model\ValueObject;

use Ramsey\Uuid\Uuid;

use Model\ValueObject\EntityId;

/**
 * Represents an identity of an entity as a UUID.
 *
 * @author ely
 */
abstract class UuidEntityId implements EntityId
{

    /**
     * @var string The identity of the entity.
     */
    private $id;

    /**
     * {@inheritdoc}
     */
    public function __construct(self $id = null)
    {
        $this->id = $id ?? Uuid::uuid4()->toString();
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->id;
    }

}