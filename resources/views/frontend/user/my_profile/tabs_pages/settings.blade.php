<div class="container settings">
    <div class="row">
        <div class="col-6">
            <h4 class="aaa">Account Settings</h4>
        </div>
    </div>


    <form action="{{ route('frontend.user.account_information_update') }}" method="POST">
        {{ csrf_field() }}
        <div class="row mt-4 text-center">
            
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-6 pl-0">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="{{ $user->first_name}}" required>
                    </div>
                    <div class="col-6 pr-0">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{ $user->last_name}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 pl-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $user->email}}" required>
                    </div>
                    <div class="col-6 pr-0">
                        <input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{ $user->address}}" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 pl-0">
                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="{{ $user->location}}" >
                    </div>
                    <div class="col-6 pr-0">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Contact Number" value="{{ $user->contact_number}}" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 pl-0">
                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company name" value="{{ $user->company_name}}" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <input type="hidden" class="form-control" value="{{ $user->id}}" name="hidden_id">
                        <button type="submit" class="btn rounded-pill text-light px-5 py-2" style="background-color: #0F9D58;">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{ route('frontend.user.account_password_update') }}" method="POST">
        <h4 class="mt-5 mb-3">Account Password Settings</h4>

        <div class="row mb-5 mt-4">
            <div class="col-12 mb-3 p-0">
                <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password">
                @if($errors->any('old_password'))
                    <span class="text-danger invalid">{{ $errors->first('old_password') }}</span>
                @endif
            </div>
            <div class="col-12 mb-3 p-0">
                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                @if($errors->any('new_password'))
                    <span class="text-danger invalid">{{ $errors->first('new_password') }}</span>
                @endif
            </div>
            <div class="col-12 mb-3 p-0">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                @if($errors->any('confirm_password'))
                    <span class="text-danger invalid">{{ $errors->first('confirm_password') }}</span>
                @endif
            </div>


            <div class="col-12 text-center">
                <button type="submit" class="btn rounded-pill text-light px-5 py-2" style="background-color: #0F9D58;">Update Password</button>
            </div>
        </div>
    </form>
                
</div>



