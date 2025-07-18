<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints\Valid;

readonly class NewEnquiryDto
{
    public function __construct(
        #[Valid]
        public SubscriberDto $subscriber,
        public array $lists,
        #[Valid]
        public EnquiryDto $enquiry,
    )
    {
    }
}
