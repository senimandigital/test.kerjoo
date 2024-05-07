<?php

namespace Tests\Utilities;

trait ValidationRulesTrait
{
    public function getAnnualLeaveValidationRules(): array
    {
        return [
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after:tanggal_mulai',
        ];
    }
}
