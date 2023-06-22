<div class="card">
    <div class="card-header">
        <h2 class="card-title">Vehical Details</h2>
    </div>
    <div class="card-body">
        <x-display-validation-errors/>
        <form action="{{route('vehical.store')}}" class="md:w-6/12" method="POST">

            <x-input id="ownername" name="ownername" placeholder="Owner name" label="Owner name"/> 

            <x-input id="registrationno" name="registrationno" placeholder="Registration no" label="Registration no"/> 

            <x-input id="chassisno" name="chassisno" placeholder="Chassis no" label="Chassis no"/> 

            <x-input id="engineno" name="engineno" placeholder="Engine no" label="Engine no"/> 

            <x-input id="fueltype" name="fueltype" placeholder="Fuel type" label="Fuel type"/> 

            <x-input id="makermodel" name="makermodel" placeholder="Maker/Model" label="Maker/Model"/> 
            @csrf
            <x-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
        </form>
    </div>
</div>
