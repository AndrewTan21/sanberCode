<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form - Register</title>
</head>
<body>
    <form action="/welcome" method="POST" id="form_register">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>

        <!-- First Name -->
        <label for="firstname">First Name: </label>
        <br /><br />
        <input type="text" name="firstname" id="firstname" placeholder="Your first name">
        <br /><br />
        
        <!-- Last Name -->
        <label for="lastname">Last Name: </label>
        <br /><br />
        <input type="text" name="lastname" id="lastname" placeholder="Your last name">
        <br/><br />

        <!-- Gender -->
        <label for="gender">Gender: </label>
        <br/><br/>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br/>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br/>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br/><br/>

        <!-- Nationality -->
        <label>Nationality: </label>
        <br /><br />
        <select name="nationality">
            <option value="indonesia">Indonesia</option >
            <option value="japan">Japan</option>
            <option value="america">America</option>
            <option value="russian">Russian</option>
        </select>
        <br /><br />

        <!-- Language Spoken -->
        <label for="spoken">Language Spoken: </label>
        <br /><br />
        <input type="radio" id="indonesia" name="spoken" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br />
        <input type="radio" id="english" name="spoken" value="english">
        <label for="english">English</label><br />
        <input type="radio" id="other" name="spoken" value="other">
        <label for="other">Other</label><br /><br />

        <!-- Biodata -->
        <label for="biodata">Bio: </label>
        <br /><br />
        <textarea id="biodata" name="biodata" cols="30" rows="10"></textarea>
        <br />

        <!-- Submisson -->
        <button type="submit" form="form_register">Sign Up</button>
    </form>
</body>
</html>