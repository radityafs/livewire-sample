<div class="my-3">
    <form action="#">
        <div class="form-group row mb-3">

            <input type="hidden" class="form-control" id="name" wire:model="id">

            <div class="col">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" wire:model="name">
            </div>
            <div class="col">
                <label for="name">Phone</label>
                <input type="text" class="form-control" id="name" wire:model="phone">
            </div>
        </div>

        <div class="form-group">
            <div class="col">
                <button wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>

</div>
