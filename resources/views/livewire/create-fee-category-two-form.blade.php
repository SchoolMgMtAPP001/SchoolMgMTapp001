<div class="card">
    <div class="card-header">
        <h2 class="card-title">Create Fee Category</h2>
    </div>
    <div class="card-body">
        <x-display-validation-errors/>
        <form action="{{route('fee-categories-two.store')}}" class="md:w-6/12" method="POST">
            <x-input id="name" name="name" placeholder="Fee Category Name" label="Name2"/>
            <x-textarea id="description" name="description" placeholder="Fee Category Description" label="Description"/>
            @csrf
            <x-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
        </form>
    </div>
</div>
