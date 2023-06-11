<br>
<br>
<br>
<br>

<div class="card login-form">
    <div class="card-body">
        <h3 class="card-title text-center">Change password</h3>
        <!--Password must contain one lowercase letter, one number, and be at least 7 characters long.-->
        <div class="card-text">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mot de passe actuel</label>
                    <input type="password" class="form-control form-control-sm" name="oldPWD">
                </div>
                <div class="mt-4 border-top pt-4"></div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nouveau mot de passe </label>
                    <input type="password" class="form-control form-control-sm" name="newPWD">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Répéter votre nouveau mot de passe </label>
                    <input type="password" class="form-control form-control-sm" name="newPWDrpt">
                </div>
                <br>
                <button type="submit" name="confirmNewPWD" class="btn btn-primary btn-block submit-btn">Confirm</button>
            </form>
        </div>
    </div>
</div>