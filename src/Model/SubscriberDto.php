<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;

readonly class SubscriberDto
{
    public function __construct(
        #[Email]
        #[Length(max: 255)]
        public string $emailAddress,
        #[Length(max: 255)]
        public ?string $firstName,
        #[Length(max: 255)]
        public ?string $lastName,
        #[LessThan('-18 years')]
        public \DateTimeImmutable $dateOfBirth,
        public ?bool $marketingConsent,
    )
    {
    }
}
