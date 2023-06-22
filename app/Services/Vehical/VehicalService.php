<?php

namespace App\Services\Vehical;

use App\Models\Vehical; 

class VehicalService
{
    /**
     * Store a new fee payment.
     *
     * @param array $records
     */

     
    public function storeVehical($records): Vehical
    {
        $vehical = Vehical::create([
            'ownername'  => $records['ownername'],
            'registrationno'             => $records['registrationno'],
            'chassisno'  => $records['chassisno'],
            'engineno'             => $records['engineno'],
            'fueltype'  => $records['fueltype'],
            'makermodel'             => $records['makermodel'], 
            'school_id'    => $records['school_id'],
        ]);

        return $vehical;
    }

    /**
     * Update a fee payment.
     *
     * @param Vehical   $vehical
     * @param array $record
     */
    public function updateVehical(Vehical $vehical, $record): Vehical
    {
        $vehical->update([
            'ownername'  => $record['ownername'],
            'registrationno'             => $record['registrationno'],
            'chassisno'  => $record['chassisno'],
            'engineno'             => $record['engineno'],
            'fueltype'  => $record['fueltype'],
            'makermodel'             => $record['makermodel'], 
        ]);

        return $vehical;
    }

    /**
     * Delete a fee payment.
     *
     * @param Vehical $vehical
     */
    public function deleteVehical(Vehical $vehical): bool|null
    {
        return $vehical->delete();
    }
}
