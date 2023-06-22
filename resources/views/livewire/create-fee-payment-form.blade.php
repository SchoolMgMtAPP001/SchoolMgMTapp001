<div class="card">
    <div class="card-header">
        <h2 class="card-title">Fee Payment</h2>
    </div>
    <div class="card-body">
        <x-display-validation-errors/>
        <form action="{{route('fee-payment.store')}}" class="md:w-6/12" method="POST">
        <x-display-validation-errors/>
            <x-select id="fee-category" name="fee_category_id" label="Fee Category">
                @foreach ($feeCategories as $feeCategory)
                    <option value="{{$feeCategory->id}}">{{$feeCategory->name}}</option>
                @endforeach
            </x-select>
            <x-input id="amount" name="amount" placeholder="Payment amount" label="Payment amount"/> 
            @csrf
            <x-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
        </form>
    </div>
</div>
