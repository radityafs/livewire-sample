<div class="my-5">


    <div class="card">
        @if(session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
    
    </div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button wire:click="handleEdit({{ $contact->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="handleDelete({{ $contact->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
    </table>

</div>
