<?php

namespace Shas\TransEditBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class IsLocaleExistsConstraint extends Constraint
{
    public function validatedBy()
    {
        return 'shas.validator.is_locale_exists';
    }

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}