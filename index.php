<?php include('includes/header.php') ?>

<?php
    $_SESSION['iref'] = isset($_GET['iref']) ? $_GET['iref'] : '';
    $_SESSION['ht_id'] = false;
?>

<h1>Get Your <strong>FREE</strong> DVD & Brochure!</h1>
<p class="lead">Plus, Right Now <strong>SAVE and Additional</strong> $1,000 with Bonus Gifts!</p>
<form name="form" class="form" method="POST" action="process.php">
    <input type="hidden" name="validate" class="validate" value="invalid" />
    <div class="form-border top"></div>
    <h2>Fast, Easy & FREE!</h2>
    <p class="form-lead">Just fill out the quick form below to receive your FREE information. No obligation!</p>
    <div class="row">
        <div class="col col-first-name">
            <input type="text" name="first_name" class="first-name required" placeholder="First Name*" />
        </div>
        <div class="col col-last-name">
            <input type="text" name="last_name" class="last-name required" placeholder="Last Name*" />
        </div>
    </div>
    <div class="row">
        <input type="text" name="email" class="email" placeholder="Email" />
    </div>
   <div class="row">
        <input type="text" name="phone" class="phone required" placeholder="Phone*" />
    </div>
   <div class="row">
        <input type="text" name="address" class="address" placeholder="Address" />
    </div>
    <div class="row">
        <div class="col col-city">
            <input type="text" name="city" class="city" placeholder="City" />
        </div>
        <div class="col col-state">
            <select name="state" class="state">
                <?php include('includes/states.php') ?>
            </select>
        </div>
        <div class="col col-zip">
            <input type="text" name="zip" class="zip required" placeholder="Zip*" />
        </div>
    </div>
    <div class="row">
        <button type="submit" class="submit-form">Get Your <span>FREE</span> DVD & Brochure NOW!</button>
    </div>
    <span class="required-text">* required</span>
    <div class="form-border bottom"></div>
</form>

<?php include('includes/footer.php') ?>