@extends('layouts.main')
@section('content')
	<!-- main content -->
	<main class="main main--sign" data-bg="img/bg/bg.png">
		<!-- registration form -->
		<div class="sign">
			<div class="sign__content">
				<form action="#" class="sign__form">
					<a href="index.html" class="sign__logo">
						<img src="img/logo.png" alt="">
					</a>

					<div class="sign__group">
						<input type="text" class="sign__input" placeholder="Name">
					</div>

					<div class="sign__group">
						<input type="text" class="sign__input" placeholder="Email">
					</div>

					<div class="sign__group">
						<input type="password" class="sign__input" placeholder="Password">
<!DOCTYPE html>
<html lang="en">
@include('includes._head')
<body>
	<!-- main content -->
	<main class="main main--sign" data-bg="{{asset('assets/img/bg/bg.png')}}">
		<!-- registration form -->
		<div class="sign">
			<div class="sign__content">
				<form action="{{route('website.post.register')}}" method="POST" class="sign__form">
					@csrf
					<a href="index.html" class="sign__logo">
						<img src="{{asset('assets/img/logo.svg')}}" alt="">
					</a>

					<div class="sign__group">
						<input type="text" name="username" value="{{old('username')}}" class="sign__input" placeholder="User name ex:moh_20">
					</div>

					<div class="sign__group">
						<input type="text"  name="phone" value="{{old('phone')}}"  class="sign__input" placeholder="Phone">
					</div>

					<div class="sign__group">
						<input type="password" name="password"  class="sign__input" placeholder="Password">
					</div>
					<div class="sign__group">
						<input type="password" name="password_confirmation"   class="sign__input" placeholder="Password Confirmation">
					</div>

					<div class="sign__group sign__group--checkbox">
						<input id="privacy" name="privacy" type="checkbox">
						<label for="privacy">I agree to the <a href="privacy.html">Privacy Policy</a></label>
					</div>
					
					<button class="sign__btn" type="submit"><span>Sign up</span></button>

					<span class="sign__delimiter">or</span>

				

					<span class="sign__text">Already have an account? <a href="{{route('website.login')}}">Sign in!</a></span>
				</form>
			</div>
		</div>
		<!-- end registration form -->
	</main>
	<!-- end main content -->
	<!-- scripts -->
	@include('includes._script')

</body>
</html>
