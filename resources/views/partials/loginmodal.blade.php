<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="Login">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="filterModalTitle">Login</h4>
            </div>
            <div class="modal-body">

	<form action="{{action('UserController@login')}}" method="post" class="navbar-form navbar-right">
	{!! csrf_field() !!}
		<div class="loginmodaldiv">
                        <input type="text" name="identifier" placeholder="" class="form-control usernamelogin"><br>
                        <input type="password" name="password" placeholder="" class="form-control passwordlogin"><br>
                        <button type="submit" class="btn btn-primary">Login</button> <input id="rememberme" type="checkbox" name="remember"> <span id="rember">Remember me?</span>
		</div>
	</form>
	   </div>
	    <div class="modal-footer">
		<p id="logincenter">Don't have an account? <a href="/register">Register</a> now!</p>
		<ul class="vorteilul">
		<p class="vorteile">Why should I register?</p>
		<li>Favor your favorite WebMs</li>
		<li>Upload videos</li>
		<li>Write comments</li>
		</ul>
            </div>
        </div>
    </div>
</div>
