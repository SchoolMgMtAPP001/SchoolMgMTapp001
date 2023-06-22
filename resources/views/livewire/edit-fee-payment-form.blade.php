<div class="card">
    <div class="card-header">
        <h2 class="card-title">Edit {{$feePayment->name}}</h2>
    </div>
    <div class="card-body">
        <form action="{{route('fee-payment.update', $feePayment->id)}}" method="POST" class="md:w-1/2">
            <x-display-validation-errors/>

       

            <x-input id="amount" name="amount" label="Amount" placeholder="Fee amount" value="{{$feePayment->amount}}"/>
            <x-textarea id="description" name="description" placeholder="Fee Description" label="Description">
                {{$feePayment->description}}
            </x-textarea>
            <x-button label="Edit" theme="primary" icon="fas fa-pen" type="submit" class="w-full md:w-1/2"/>
            @csrf
            @method('PUT')
        </form>
    </div>
</div>
