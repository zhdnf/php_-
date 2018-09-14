{include file="common/top.tpl"}
 
 <br><br><br><br><br>
 <div class="container" style="width:350px">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="inputEmail" class="form-control" placeholder="Username" required="" autofocus="" type="email">
		<br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
		<br>
		<img class="col-sm-6" src="{$respath}/assets/image.php"> 
		<a href="">dont       see</a>
		<input class="col-sm-6" placeholder="Code" type="text">
		<br><br>
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>
	  
{include file="common/bottom.tpl"}