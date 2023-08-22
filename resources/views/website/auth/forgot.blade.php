<!DOCTYPE html>
<html lang="en">
@include('includes._head')

<body>
    <!-- main content -->
    <main class="main main--sign" data-bg="img/bg/bg.png">
        <!-- authorization form -->
        <div class="sign">
            <div class="sign__content">
                <form action="#" class="sign__form">
                    <a href="index.html" class="sign__logo">
                        <img src="img/logo.png" alt="">
                    </a>

                    <div class="sign__group">
                        <input type="text" class="sign__input" placeholder="Email">
                    </div>

                    <div class="sign__group sign__group--checkbox">
                        <input id="remember" name="remember" type="checkbox">
                        <label for="remember">I agree to the <a href="privacy.html">Privacy Policy</a></label>
                    </div>

                    <button class="sign__btn" type="button"><span>Send</span></button>

                    <span class="sign__text">We will send a password to your Email</span>
                </form>
            </div>
        </div>
        <!-- end authorization form -->
    </main>
    <!-- end main content -->

    @include('includes._script')
</body>

</html>
