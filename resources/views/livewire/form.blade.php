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
    <h2 class="text-center mt-5">Live Wire Validation Form</h2>
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
</div>
