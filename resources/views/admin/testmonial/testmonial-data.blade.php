<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th width="40%">Name</th>
                    <th width="25%">Position</th>
                    <th width="25%">Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->name }}</strong>
                        </td>
                        <td>{{ $record->position }}</td>
                        <td>
                            <i class="text-secondary mb-3">
                                <img src="{{$record->image() }}" alt="Not Found" width="50px" height="50px">

                            </i>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('showTestimonial', { id: {{ $record->id }} })">
                                        <i class="bx bx-show me-1"></i>
                                        Show</a>
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('updateTestimonial', { id: {{ $record->id }} })">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteTestimonial',{ id: {{ $record->id }} })"><i
                                                class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
        @else
            <span class="text-danger">No results found</span>
        @endif
    </div>
</div>