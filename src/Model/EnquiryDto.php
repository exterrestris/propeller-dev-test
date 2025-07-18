<?php

namespace App\Model;

readonly class EnquiryDto
{
    public function __construct(
        public string $message,
    )
    {
    }
}
