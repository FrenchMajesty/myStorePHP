<div id="content" class="container">
	<div class="nav-column">
		<ul>
		<li class="selected">Account</li>
		<li>Shipping</li>
		<li>Payments</li>
		</ul>
	</div>
	<div class="selector">
        <div class="titler">Account</div>
        <form method="post" action="#">
            <div class="edge">
            <div class="ligne-content">
              <label class="label">*First name: </label>
              <input type="text" name="firstname" class="txt small" value="" placeholder="Your first name." maxlength="23">
            </div>
            <div class="ligne-content">
                <label class="label">*Last name: </label>
                <input type="text" name="lastname" class="txt small" value="" placeholder="Your last name." maxlength="23">
            </div>
            <div class="ligne-content">
                <label class="label">*Phone number: </label>
                <input type="text" name="mobile" class="txt small" value="" placeholder="Example: +1(800)1232017." maxlength="11">
            </div>
            </div>
            <div class="edge">
                <div class="ligne-content">
                    <!--label class="label checkbox">*Is the billing adress the same as the shipping? Select if yes. </label>
                    <input id="same-address" type="checkbox"><br-->
                    <label class="label">*Address: </label>
                    <input type="text" name="bill-address1" class="txt long" value="" placeholder="Your billing address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">Address 2: </label>
                    <input type="text" name="bill-address2" class="txt long" value="" placeholder="The rest of your billing address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">*Country: </label>
                    <input type="text" name="bill-country" class="txt small" value="USA" placeholder="Enter the city." maxlength="0" style="margin-right: 2.5em;">
                     <label class="label" style="width: 62px;">*State: </label>
                    <input type="text" name="bill-state" class="txt small" value="Texas" placeholder="Enter the zipcode." maxlength="0">
                </div>
                <div class="ligne-content">
                    <label class="label">*City: </label>
                    <input type="text" name="bill-city" class="txt small" value="" placeholder="Enter the city." maxlength="20" style="margin-right: 2.5em;">
                     <label class="label" style="width: 62px;">*Zipcode: </label>
                    <input type="text" name="bill-zip" class="txt small" value="" placeholder="Enter the zipcode." maxlength="5">
                </div>
            </div>
            <div class="edge">
                <div class="ligne-content">
                    <label class="label">*Address: </label>
                    <input type="text" name="ship-address1" class="txt long" value="" placeholder="Your shipping address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">Address 2: </label>
                    <input type="text" name="ship-address2" class="txt long" value="" placeholder="The rest of your shipping address." maxlength="35">
                </div>
                <div class="ligne-content">
                    <label class="label">*Country: </label>
                    <input type="text" name="bill-country" class="txt small" value="USA" placeholder="Enter the city." maxlength="0" style="margin-right: 2.5em;">
                     <label class="label" style="width: 62px;">*State: </label>
                    <input type="text" name="bill-state" class="txt small" value="Texas" placeholder="Enter the zipcode." maxlength="0">
                </div>
                <div class="ligne-content">
                    <label class="label">*City: </label>
                    <input type="text" name="ship-city" class="txt small" value="" placeholder="Enter the city." maxlength="20" style="margin-right: 2.5em;">
                    <label class="label" style="width: 62px;">*Zipcode: </label>
                    <input type="text" name="bill-zip" class="txt small" value="" placeholder="Enter the zipcode." maxlength="5">
                </div>
            </div>
        </form>
	</div>
</div>
