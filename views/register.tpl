<div id="content" class="container">
	<div class="selector">
        <div class="titler">Sign Up</div>
        <form method="post" action="">
            <input type="text" name="token" value="{@token}">
            <div class="edge">
            <div class="ligne-content">
              <label class="label">*First name: </label>
              <input type="text" name="firstname" class="txt small" value="kkk" placeholder="Your first name." maxlength="23" required>
            </div>
            <div class="ligne-content">
                <label class="label">*Last name: </label>
                <input type="text" name="lastname" class="txt small" value="kkk" placeholder="Your last name." maxlength="23" required>
            </div>
            <div class="ligne-content">
                <label class="label">*Email: </label>
                <input type="text" name="email" class="txt small" value="kkk" placeholder="Your email." maxlength="40" required>
            </div>
            <div class="ligne-content">
                <label class="label">*Password: </label>
                <input type="password" name="password" class="txt small" value="ooo" required>
            </div>
            <div class="ligne-content">
                <label class="label">*Confirm password: </label>
                <input type="password" name="password2" class="txt small" value="ooo" required>
            </div>
            </div>
            <div class="edge">

                <div class="ligne-content">
                    <label class="label checkbox">*Is the billing address the same as the shipping? Select if yes. </label>
                    <input id="same-address" name="same-address" type="checkbox"><br>
                    <label class="label">*Address: </label>
                    <input type="text" name="ship-address1" class="txt long" value="kkk" placeholder="Your shipping address." maxlength="35" required>
                </div>
                <div class="ligne-content">
                    <label class="label">Address 2: </label>
                    <input type="text" name="ship-address2" class="txt long" value="kkk" placeholder="The rest of your shipping address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">*Country: </label>
                    <input type="text" name="ship-country" class="txt small" value="USA" placeholder="dropdown" maxlength="0" style="margin-right: 2.5em;" required>
                     <label class="label" style="width: 62px;">*State: </label>
                    <input type="text" name="ship-state" class="txt small" value="Texas" placeholder="dropdown" maxlength="0" required>
                </div>
                <div class="ligne-content">
                    <label class="label">*City: </label>
                    <input type="text" name="ship-city" class="txt small" value="kkk" placeholder="Enter your city." maxlength="20" style="margin-right: 2.5em;" required>
                    <label class="label" style="width: 62px;">*Zipcode: </label>
                    <input type="text" name="ship-zip" class="txt small" value="kkk" placeholder="Enter your zipcode." maxlength="5" required>
                </div>

            <div class="edge">
                <div class="ligne-content">
                    <label class="label">*Address: </label>
                    <input type="text" name="bill-address1" class="txt long" value="" placeholder="Your billing address." maxlength="35" required>
                </div>
                <div class="ligne-content">
                    <label class="label">Address 2: </label>
                    <input type="text" name="bill-address2" class="txt long" value="" placeholder="The rest of your billing address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">*Country: </label>
                    <input type="text" name="bill-country" class="txt small" value="USA" placeholder="dropdown" maxlength="0" style="margin-right: 2.5em;" required>
                     <label class="label" style="width: 62px;">*State: </label>
                    <input type="text" name="bill-state" class="txt small" value="Texas" placeholder="dropdown" maxlength="0" required>
                </div>
                <div class="ligne-content">
                    <label class="label">*City: </label>
                    <input type="text" name="bill-city" class="txt small" value="" placeholder="Enter your city." maxlength="20" style="margin-right: 2.5em;" required>
                     <label class="label" style="width: 62px;">*Zipcode: </label>
                    <input type="text" name="bill-zip" class="txt small" value="" placeholder="Enter your zipcode." maxlength="5" required>
                </div>
            </div>
            </div>
            <input type="submit" name ="submit" value="Sign up">
        </form>
	</div>
</div>
