<!-- Modal --> 
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centerd" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center">Login
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span class="glyphicon glyphicon-remove"></span></button> 
            </h2>
            </div>
            <div class="modal-body">
                <form class="form" action="login_script.php" method="POST">
                    <div class="form-group">
                        <p>Don't have an account?<a href="signup.php" class="text-primary">Register</a></p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="me@abc.com" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" value="password" placeholder="Enter Password" pattern=".{6,}" required="true">
                    </div>                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>                        
                    </div>                    
                    <div class="form-group">
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
