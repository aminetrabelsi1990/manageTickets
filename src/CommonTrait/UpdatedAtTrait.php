<?php

namespace App\CommonTrait;

trait UpdatedAtTrait {
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
    */
    public function setUpdatedAt(): self
    {
        $this->updatedAt = new \DateTime('now');

        return $this;
    }
}
