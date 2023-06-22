<?php

namespace App\Services\Fee;

use App\Models\FeePayment;

class FeePaymentService
{
    /**
     * Store a new fee payment.
     *
     * @param array $records
     */
    public function storeFeePayment($records): FeePayment
    {
        $feePayment = FeePayment::create([
            'fee_category_id'  => $records['fee_category_id'],
            'amount'             => $records['amount'],
        ]);

        return $feePayment;
    }

    /**
     * Update a fee payment.
     *
     * @param FeePayment   $feePayment
     * @param array $record
     */
    public function updateFeePayment(FeePayment $feePayment, $record): FeePayment
    {
        $feePayment->update([
            'fee_category_id'  => $record['fee_category_id'],
            'amount'             => $record['amount'],
        ]);

        return $feePayment;
    }

    /**
     * Delete a fee payment.
     *
     * @param FeePayment $feePayment
     */
    public function deleteFeePayment(FeePayment $feePayment): bool|null
    {
        return $feePayment->delete();
    }
}
