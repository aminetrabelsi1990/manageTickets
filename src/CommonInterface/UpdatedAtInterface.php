<?php

namespace App\CommonInterface;

interface UpdatedAtInterface {
    public function getUpdatedAt(): ?\DateTime;

    public function setUpdatedAt(): self;
}
