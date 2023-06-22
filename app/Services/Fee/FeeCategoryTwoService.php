<?php

namespace App\Services\Fee;

use App\Models\FeeCategoryTwo;

class FeeCategoryTwoService
{
    /**
     * Store a fee category.
     *
     * @param array $record
     *
     * @return FeeCategoryTwo
     */
    public function storeFeeCategory($record): FeeCategoryTwo
    {
        $feeCategorytwo = FeeCategoryTwo::create([
            'name'         => $record['name'],
            'description'  => $record['description'] ?? null,
            'school_id'    => $record['school_id'],
        ]);

        return $feeCategorytwo;
    }

    /**
     * Update a fee category.
     *
     * @param FeeCategoryTwo $feeCategoryTwo
     * @param array       $record
     *
     * @return $feeCategoryTwo
     */
    public function updateFeeCategory(FeeCategoryTwo $feeCategoryTwo, $record): FeeCategoryTwo
    {
        $feeCategoryTwo->update([
            'name'         => $record['name'],
            'description'  => $record['description'] ?? null,
        ]);

        return $feeCategoryTwo;
    }

    /**
     * Delete a fee category.
     *
     * @param FeeCategoryTwo $feeCategory
     *
     * @return bool|null
     */
    public function deleteFeeCategory(FeeCategoryTwo $feeCategoryTwo): bool|null
    {
        return $feeCategoryTwo->delete();
    }
}
