
    <h2>Personal Information</h2>
    <form method="POST" action="/personalInformation">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'first_name'))

        <div class="form-group">
            <label for="last_name">Last name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'last_name'))

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'email'))

        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="number" class="form-control" id="mobile" name="mobile" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'password'))

        <div class="form-group">
            <label for="birth_date">Birth date:</label>
            <input type="date" class="form-control" id="birth_date"
                   name="birth_date" required>
        </div>


        <div class="form-group" >
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br>
        </div>

        

        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'country'))

        <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input type="text" class="form-control" id="occupation" name="occupation" required>
        </div>
        @include('partials.formerrors', array('fieldtype' => 'occupation'))
        <div>
        <select name="pain_type_id" id="pain_type_id" required>
  <?php
    foreach($array as $name) { ?>
      <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
  <?php
    } ?>
</select> 
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

