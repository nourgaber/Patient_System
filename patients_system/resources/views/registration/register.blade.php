
    <h2>Register</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        @include('partials.formerrors', array('fieldtype' => 'name'))

        @if ($duplicateUsername == 1)
            <li> this is a duplicate username please choose anthor one</li>
        @endif
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @include('partials.formerrors', array('fieldtype' => 'password'))

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
