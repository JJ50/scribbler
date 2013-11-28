<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus name="first" placeholder="Enter First Name" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus name="last" placeholder="Enter Last Name" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus name="username" placeholder="Enter Username" type="text"/>
        </div>
        <div class="form-group">
            <input name="password" placeholder="Enter Password" type="password"/>
        </div>
        <div class="form-group">
            <input name="confirmation" placeholder="Enter Password Again" type="password"/>
        </div>
        <div class="form-group">
            <select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select><br><br>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">sign in</a>
</div>
