{{--
<div>
    <form id="myForm" class="was-validated" wire:submit.prevent="submitForm">
        <div class="form-row">
            <div class="col-6">
                <div class="form-group">
                    <label for="emailInput">Enter Your Name</label>
                    <input
                        type="text"
                        class="form-control is-invalid"
                        id="name"
                        wire:model="name"
                        placeholder="Enter your email"
                        required
                    />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="firstNameInput">Enter Email</label>
                    <input
                        type="email"
                        wire:model="email"
                        class="form-control is-invalid"
                        id="email"
                        placeholder="Enter your first name"
                    />
                    <div class="invalid-feedback">
                        @error('email') <span>{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
--}}

<div class="container">
    <h2 class="text-center mt-5">Livewire Real Time Form Validation </h2>
    <form class="was-validated" wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control is-invalid" id="name" wire:model="name"
                placeholder="Enter your email" required />
            <div class="invalid-feedback">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br />
            <label for="roll">Roll</label>
            <input type="number" class="form-control is-invalid" id="roll" wire:model="roll"
                placeholder="Enter your roll" required />
            <div class="invalid-feedback">
                @error('roll')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br />
            <input type="email" wire:model="email" class="form-control is-invalid" id="email"
                placeholder="Enter your first name" autocomplete="off" required />
            <div class="invalid-feedback">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lists as $list)
                        <tr>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->roll }}</td>
                            <td>{{ $list->email }}</td>
                            <td>
                                <button wire:click="edit({{ $list->id }})" class="btn btn-primary btn-sm">Edit</button>
                                <button wire:click="delete({{ $list->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
