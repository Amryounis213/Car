
@extends('layouts.website')
@section('content')
<!-- main content -->
<main class="main">
	<!-- home -->
	<div class="home">
		<!-- home bg -->
		<div class="home__bg"></div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="home__content">
						<h1 class="home__title">The easy way to <br>takeover a lease</h1>
						<p class="home__text">Live in New York, New Jerset and Connecticut!</p>

						<form class="home__search" action="#">
							<div class="home__group">
								<label for="search1">Car, model, or brand</label>
								<input type="text" name="search1" id="search1" placeholder="What car are you looking for?">
							</div>

							<div class="home__group">
								<label for="search2">Max. monthly payment</label>
								<input type="text" name="search2" id="search2" placeholder="Add an amount in $">
							</div>

							<div class="home__group">
								<label for="search3">Make Year</label>
								<input type="text" name="search3" id="search3" placeholder="Add a minimal make year">
							</div>
							
							<button type="button"><span>Search</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home -->

	<div class="container">
		<!-- cars -->
		<section class="row">
			<!-- title -->
			<div class="col-12">
				<div class="main__title main__title--first">
					<h2>Featured cars</h2>

					<a href="cars.html" class="main__link">View more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
				</div>
			</div>
			<!-- end title -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/1-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/1-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/1-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">Toyota RAV4</a></h3>
						<span class="car__year">2021</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Hybrid</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>6.1km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$440 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/2-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/2-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/2-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">BMW 3 Series</a></h3>
						<span class="car__year">2019</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Gasoline</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>8.2km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$350 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/3-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/3-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/3-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">Volkswagen T-Cross</a></h3>
						<span class="car__year">2020</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Gasoline</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>5.3km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$400 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/4-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/4-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/4-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">Cadillac Escalade</a></h3>
						<span class="car__year">2020</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Gasoline</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>7.7km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$620 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/5-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/5-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/5-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">BMW 4 Series GTI</a></h3>
						<span class="car__year">2021</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Gasoline</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>7.6km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$530 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->

			<!-- car -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="car">
					<div class="splide splide--card car__slider">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<img src="img/cars/6-1.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/6-2.jpg" alt="">
								</li>
								<li class="splide__slide">
									<img src="img/cars/6-3.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="car__title">
						<h3 class="car__name"><a href="car.html">BMW 4 Series</a></h3>
						<span class="car__year">2019</span>
					</div>
					<ul class="car__list">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
							<span>4 People</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
							<span>Gasoline</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
							<span>7.2km / 1-litre</span>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
							<span>Automatic</span>
						</li>
					</ul>
					<div class="car__footer">
						<span class="car__price">$490 <sub>/ month</sub></span>
						<button class="car__favorite" type="button" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg></button>
						<a href="car.html" class="car__more"><span>Rent now</span></a>
					</div>
				</div>
			</div>
			<!-- end car -->
		</section>
		<!-- end cars -->
	</div>

	<!-- features -->
	<div class="container">
		<div class="row">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Four reasons to rent a car in Waydex</h2>

					<div class="row">
						<div class="col-12 col-xl-9">
							<p>Looking for a reliable car rental? Look no further! Our company offers affordable prices, full insurance coverage, and support on the road. With minimum bureaucracy, you can get on the road hassle-free.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end title -->
		</div>

		<div class="row">
			<div class="col-12 col-md-6 col-xl-3">
				<div class="feature">
					<span class="feature__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,11.05c0-.11,0-.22,0-.33l-.09-.6-.09-.39c0-.17-.08-.34-.13-.51s-.08-.27-.13-.4a2.17,2.17,0,0,1-.07-.24s0,0,0-.05a10.1,10.1,0,0,0-5.9-5.9s0,0-.05,0l-.23-.07-.42-.13c-.15,0-.31-.08-.46-.12l-.46-.1-.46-.07c-.16,0-.31,0-.48-.06s-.35,0-.52,0L12,2l-.39,0c-.17,0-.35,0-.52,0s-.32,0-.48.06l-.46.07-.46.1c-.15,0-.31.07-.46.12l-.42.13-.23.07s0,0-.05,0a10.1,10.1,0,0,0-5.9,5.9s0,0,0,.05a2.17,2.17,0,0,1-.07.24c0,.13-.09.26-.13.4s-.09.34-.13.51l-.09.39-.09.6c0,.11,0,.22,0,.33,0,.31,0,.63,0,.95s0,.64,0,.95c0,.11,0,.22,0,.33l.09.6.09.39c0,.17.08.34.13.51s.08.27.13.4a2.17,2.17,0,0,1,.07.24.43.43,0,0,1,0,.07,10,10,0,0,0,5.89,5.88s0,0,.05,0l.24.07.4.13.51.13.39.09.6.09.33,0c.31,0,.63.05.95.05s.64,0,.95-.05l.33,0,.6-.09.39-.09.51-.13.4-.13.24-.07s0,0,.05,0a10,10,0,0,0,5.89-5.88.43.43,0,0,1,0-.07c0-.08.05-.16.07-.24s.09-.26.13-.4.09-.34.13-.51l.09-.39.09-.6c0-.11,0-.22,0-.33,0-.31.05-.63.05-.95S22,11.36,22,11.05Zm-6.3-6.16a8,8,0,0,1,3.46,3.46l-2.86,1a5.14,5.14,0,0,0-1.64-1.64Zm-5.36-.7c.21-.05.41-.08.61-.11l.24,0a8.24,8.24,0,0,1,1.72,0l.24,0c.2,0,.4.06.61.11h.06l-1,2.86A4.49,4.49,0,0,0,12,7a4.4,4.4,0,0,0-.73.06l-1-2.86Zm-1.94.7,1,2.86A5.14,5.14,0,0,0,7.75,9.39l-2.86-1A8,8,0,0,1,8.35,4.89ZM4.19,13.71a4.17,4.17,0,0,1-.1-.6c0-.09,0-.17,0-.25a7.42,7.42,0,0,1,0-1.72c0-.08,0-.16,0-.25a4.17,4.17,0,0,1,.1-.6s0,0,0-.06l2.86,1a4.47,4.47,0,0,0,0,1.46l-2.86,1S4.19,13.73,4.19,13.71Zm4.16,5.4a8,8,0,0,1-3.46-3.46l2.86-1a5.14,5.14,0,0,0,1.64,1.64Zm5.36.7c-.21.05-.41.08-.61.11l-.24,0a8.24,8.24,0,0,1-1.72,0l-.24,0c-.2,0-.4-.06-.61-.11h-.06l1-2.86a4.47,4.47,0,0,0,1.46,0l1,2.86Zm-.67-5h0c-.17.06-.34.1-.5.14a2.73,2.73,0,0,1-1,0c-.16,0-.33-.08-.5-.14h0A3,3,0,0,1,9.2,13v0a3.23,3.23,0,0,1-.14-.51,2.63,2.63,0,0,1,0-1A3.23,3.23,0,0,1,9.19,11v0A3,3,0,0,1,11,9.2h0c.17-.06.34-.1.5-.14a2.73,2.73,0,0,1,1,0c.16,0,.33.08.5.14h0A3,3,0,0,1,14.8,11v0a3.23,3.23,0,0,1,.14.51,2.63,2.63,0,0,1,0,1,3.23,3.23,0,0,1-.14.51v0A3,3,0,0,1,13,14.8Zm2.61,4.31-1-2.86a5.14,5.14,0,0,0,1.64-1.64l2.86,1A8,8,0,0,1,15.65,19.11ZM20,12.86c0,.08,0,.16,0,.25a4.17,4.17,0,0,1-.1.6s0,0,0,.06l-2.86-1a4.47,4.47,0,0,0,0-1.46l2.86-1s0,0,0,.06a4.17,4.17,0,0,1,.1.6c0,.09,0,.17,0,.25a7.42,7.42,0,0,1,0,1.72Z"/></svg>
					</span>
					<h3 class="feature__title">Support on the road</h3>
					<p class="feature__text">We've got you covered with 24/7 support on the road. No matter where you are, we'll be there to help you out.</p>
				</div>
			</div>
			
			<div class="col-12 col-md-6 col-xl-3">
				<div class="feature">
					<span class="feature__icon feature__icon--pink">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>
					</span>
					<h3 class="feature__title">Affordable prices</h3>
					<p class="feature__text">Our prices are competitive and affordable. We strive to provide the best value for your money.</p>
				</div>
			</div>

			<div class="col-12 col-md-6 col-xl-3">
				<div class="feature">
					<span class="feature__icon feature__icon--purple">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>
					</span>
					<h3 class="feature__title">Minimum of bureaucracy</h3>
					<p class="feature__text">We know your time is valuable. That's why we've simplified the rental process and eliminated unnecessary bureaucracy.</p>
				</div>
			</div>

			<div class="col-12 col-md-6 col-xl-3">
				<div class="feature feature--last">
					<span class="feature__icon feature__icon--green">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.63,3.65a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39Z"/></svg>
					</span>
					<h3 class="feature__title">Full insurance</h3>
					<p class="feature__text">Drive with peace of mind knowing that our rental cars come with full insurance coverage. You are safe with us.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->

	<!-- testimonials slider -->
	<div class="container">
		<div class="row">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Customer reviews</h2>
				</div>
			</div>
			<!-- end title -->
		</div>
	</div>

	<div class="main__carousel splide splide--content">
		<div class="splide__arrows">
			<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
			<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
		</div>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<div class="testimonial testimonial--carousel">
						<div class="testimonial__text">
							<p>«I've been using this car rental service for several years now and I can honestly say that they always provide me with the best cars at the best prices. Their customer service is top-notch and I highly recommend them.»</p>
						</div>

						<div class="testimonial__client">
							<img src="img/avatars/avatar.jpg" alt="">
							<p>Gene Graham</p>
							<span>New York, USA</span>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="testimonial testimonial--carousel">
						<div class="testimonial__text">
							<p>«I rented a car for a weekend trip and was pleasantly surprised with the ease of the process. The car was clean and in great condition, and the staff was friendly and helpful. I will definitely be using this service again in the future.»</p>
						</div>

						<div class="testimonial__client">
							<img src="img/avatars/avatar2.jpg" alt="">
							<p>Rosa Lee</p>
							<span>Paris, France</span>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="testimonial testimonial--carousel">
						<div class="testimonial__text">
							<p>«I recently had an issue with a rental car and the team at this rental service went above and beyond to help me out. They were responsive and understanding, and ultimately resolved my issue in a timely manner.»</p>
						</div>

						<div class="testimonial__client">
							<img src="img/avatars/avatar3.jpg" alt="">
							<p>Tess Harper</p>
							<span>Ha Noi, Vietnam</span>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="testimonial testimonial--carousel">
						<div class="testimonial__text">
							<p>«The cars available for rent at this service are always in great condition and well-maintained. The rental process is simple and straightforward, and I appreciate the competitive pricing.»</p>
						</div>

						<div class="testimonial__client">
							<img src="img/avatars/avatar4.jpg" alt="">
							<p>Brian Cranston</p>
							<span>Washington, USA</span>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="testimonial testimonial--carousel">
						<div class="testimonial__text">
							<p>«I had a great experience renting a car from this service. The process was seamless and efficient, and the staff was friendly and professional. The car was in excellent condition and I felt safe and secure driving it.»</p>
						</div>

						<div class="testimonial__client">
							<img src="img/avatars/avatar5.jpg" alt="">
							<p>Matt Jones</p>
							<span>Sydney, Australia</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- end testimonials slider -->
</main>
<!-- end main content -->


@endsection