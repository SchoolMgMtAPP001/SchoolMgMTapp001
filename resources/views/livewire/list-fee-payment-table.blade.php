<div class="card">
    <div class="card-header">
        <h2 class="card-title">Fee Payment</h2>
    </div>
    <div class="card-body">
        <livewire:datatable unique_id="list-fee-payment-table" :model="App\Models\FeePayment::class"
        :filters="[
            ['name' => 'whereRelation', 'arguments' => ['feeCategory','school_id', auth()->user()->school_id]],
            ['name' => 'with', 'arguments' => ['feeCategory']]
        ]"
        :columns="[
            ['property' => 'amount'], 
            ['property' => 'name', 'relation' => 'feeCategory', 'name' =>'Fee Category'],
     
 
        ]"/>
    </div>
</div>
ss