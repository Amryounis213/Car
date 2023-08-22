<!DOCTYPE html>
<html lang="en">
	@include('includes._head')
<body>
	<!-- main content -->
	<main class="main main--sign" data-bg="{{asset('assets/img/bg/bg.png')}}">
		<!-- sign in -->
		<div class="sign">
			<div class="sign__content">
				<!-- authorization form -->
				<form  action="{{route('website.post.login')}}" class="sign__form" method="POST">
					@csrf
					<a href="index.html" class="sign__logo">
						<img src="img/logo.svg" alt="">
					</a>

					<div class="sign__group">
						<input type="text" name="phone" value="{{old('phone')}}" class="sign__input" placeholder="Mobile">
					</div>

					<div class="sign__group">
						<input type="password" name="password" class="sign__input" placeholder="Password">
					</div>

					<div class="sign__group sign__group--checkbox">
						<input id="remember" name="remember" type="checkbox">
						<label for="remember">Remember Me</label>
					</div>
					
					<button class="sign__btn" type="submit"><span>Sign in</span></button>

					<span class="sign__delimiter">or</span>


					<span class="sign__text">Don't have an account? <a href="{{ route('website.register') }}">Sign up!</a></span>

					<span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
				</form>
				<!-- end authorization form -->
			</div>
		</div>
		<!-- end sign in -->
	</main>
	<!-- end main content -->

	@include('includes._script')
</body>
</html>