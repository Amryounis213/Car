<html lang="en">
@include('includes._head')

<body>
    <!-- main content -->
    <main class="main main--sign" data-bg="{{ asset('assets/img/bg/bg.png') }}">
        <!-- registration form -->
        <div class="sign">
            <div class="sign__content">
                <form action="{{ route('website.post.register') }}" method="POST" class="sign__form">
                    @csrf
                    <a href="index.html" class="sign__logo">
                        <img src="{{$website->logo}}" alt="">
                    </a>

                    <div class="sign__group">
                        <input type="text" name="username" value="{{ old('username') }}" class="sign__input"
                            placeholder="User name ex:moh_20">
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="sign__group">
                        <input type="text" name="phone" value="{{ old('phone') }}" class="sign__input"
                            placeholder="Phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="sign__group">
                        <input type="password" name="password" class="sign__input" placeholder="Password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>   
                        @enderror
                    </div>
                    <div class="sign__group">
                        <input type="password" name="password_confirmation" class="sign__input"
                            placeholder="Password Confirmation">
                    </div>

                    <div class="sign__group sign__group--checkbox">
                        <input id="privacy" name="privacy" type="checkbox">
                        <label for="privacy">I agree to the <a href="{{route('website.terms')}}">Terms & Conditions</a></label>
                    </div>

                    <button class="sign__btn" type="submit"><span>Sign up</span></button>

                    <span class="sign__delimiter">or</span>



                    <span class="sign__text">Already have an account? <a href="{{ route('website.login') }}">Sign
                            in!</a></span>
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
