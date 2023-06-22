<div class="card">
    <div class="card-header">
        <h2 class="card-title">Vehical Details</h2>
    </div>
    <div class="card-body">
        <livewire:datatable unique_id="list-vehical-table" :model="App\Models\Vehical::class"
        :filters="[
            ['name' => 'where' , 'arguments' => ['school_id',auth()->user()->school_id]]
        ]"
        :columns="[
            ['property' => 'ownername'],
            ['property' => 'registrationno'], 
            ['property' => 'chassisno'],
            ['property' => 'engineno'],
            ['property' => 'fueltype'],
            ['property' => 'makermodel'],   
 
        ]"/>
    </div>
</div>
ss