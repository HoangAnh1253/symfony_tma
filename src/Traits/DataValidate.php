<?php

namespace App\Traits;

use  Symfony\Component\Validator\ConstraintViolationList;

trait DataValidate
{
    protected function correctViolationsMessage(?ConstraintViolationList $violations): array
    {
        $violationsMessages = [];
        if ($violations) {
            for ($i = 0; $i < $violations->count(); $i++) {
                $defaulMessage = $violations[$i]->getMessage();
                $correctMessage = ucfirst(str_replace("This value", $violations[$i]->getPropertyPath(), $defaulMessage));
                $violationsMessages[] = $correctMessage;
            }
        }
        return $violationsMessages;
    }
}