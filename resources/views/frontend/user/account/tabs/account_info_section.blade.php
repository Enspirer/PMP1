<div class="row">
    <h5>Account Info</h5>
</div>
<div class="account-information">
    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>User ID</p>
        </div>
        <div class="right-account col-md-9">
            <input type="text" class="form-control no-border" value="Enspirermd101" disabled>
        </div>
    </div>

    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>First Name</p>
        </div>
        <div class="right-account col-md-9">
            <input type="text" class="form-control" value="{{$logged_in_user->first_name}}">
        </div>
    </div>

    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>Last Name</p>
        </div>
        <div class="right-account col-md-9">
            <input type="text" class="form-control" value="{{$logged_in_user->last_name}}">
        </div>
    </div>


    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>Email</p>
        </div>
        <div class="right-account col-md-9">
            <input type="text" class="form-control" value="{{$logged_in_user->email}}">
        </div>
    </div>

    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>Contact number</p>
        </div>
        <div class="right-account col-md-9">
            <input type="text" class="form-control" value="{{$logged_in_user->contact_number}}">
        </div>
    </div>

    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>Online Status</p>
        </div>
        <div class="right-account col-md-9">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Go offline for ...</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>

    <div class="single-information row">
        <div class="left-account col-md-3">
            <p>Vacation Mood</p>
        </div>
        <div class="right-account col-md-9">
            <select class="form-control">
                <option>Turn on vacation mood for...</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
</div>