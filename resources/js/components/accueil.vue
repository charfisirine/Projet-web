<template>

	<br>
		<!-- banner bottom   -->
	<div class="banner-bottom py-5">
    	<div class="d-md-flex container py-xl-3 py-lg-3 justify-content-center">
        <div class="banner-left-bottom-w3ls text-center">
            <h6 class="text-wh let">Travel To DO</h6>
            <h3 class="text-wh my-3">Bienvenue dans notre Agence exceptionnelle.</h3>
            <p>Profitez de chaque moment avec votre partenaire dans notre Large choix des hotels.<br>Découvrez des expériences inoubliables avec notre agence de voyage.</p>
        </div>
   		</div>
	</div>

		<!-- //banner bottom -->
		<br>
	<hr>
	<br>
		<!-- about bech n7otha  -->
		<section class="about py-5" id="about">
			<div class="container py-xl-5 py-lg-3">
				<div class="row py-md-5">
					<div class="col-lg-4 about-left-w3pvt offset-lg-1 mt-lg-4">
						<div class="main-img">
							<img src="../../assets/images/log1.jpg" alt="" class="img-fluid pos-aboimg">
							<img src="../../assets/images/log2.jpg" alt="" class="img-fluid pos-aboimg2">

						</div>
					</div>
					<div class="col-xl-6 col-lg-7 about-right offset-xl-1">
						<h4 style="font-size: 60px; color: red;">À propos de nous</h4>
						<p class="mt-4 mb-4">Notre agence de voyage va au-delà des simples destinations exotiques, en se dédiant à la création d'expériences exceptionnelles qui dépassent les attentes.
							Grâce à un mélange unique de professionnalisme et de passion, nous personnalisons chaque voyage selon les désirs de nos clients.</p>
						<p> Avec une équipe dédiée et une attention aux détails, chaque itinéraire devient une aventure mémorable, promettant des découvertes extraordinaires et d'inoubliables souvenirs.</p>
						<a href="" class="btn button-style-2 mt-sm-5 mt-4">Lire la suite</a>
					</div>

				</div>
			</div>
		</section>
		<!-- //about -->
	<hr>
	<br>


		<!-- stats -->
		<div class="stats py-5">
			<div class="container py-xl-5 py-lg-3">
				<div class="row stats-mobamu py-5">
					<div class="col-lg-4 col-md-6">
						<div class="stats-grid">
							<div class="row">
								<div class="col-4 text-center">
									<span class="fa fa-star"></span>
								</div>
								<div class="col-8">
									<h4 class="numscroller">6000</h4>
									<p>Excellentes évaluations</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
						<div class="stats-grid">
							<div class="row">
								<div class="col-4 text-center">
									<span class="fa fa-smile-o"></span>
								</div>
								<div class="col-8">
									<h4 class="numscroller">25k</h4>
									<p>Clients Satisfaits</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-4">
						<div class="stats-grid">
							<div class="row">
								<div class="col-4 text-center">
									<span class="fa fa-cutlery"></span>
								</div>
								<div class="col-8">
									<h4 class="numscroller">150</h4>
									<p>Articles Alimentaires</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //stats -->
		<br>




			<!-- price -->
		<div class="rooms-w3ls bg-li py-5" id="price">
			<div class="container-fluid py-xl-5 py-lg-3">
				<h3 class="tittle text-center text-bl font-weight-bold">Nos hotels</h3>
				<br>
		<div class=" text-center">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-fill nav-tabs-zone mb-4" id="myTab">
                        <li v-for="(region, index) in state.regions" :key="index" class="nav-item">
                        <a @click.prevent="state.selectedTab = region.id" :class="{ 'nav-link': true, 'btn': true, 'active': selectedTab === region.id }" href="#">
                            {{ region.name }}
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>


					<br>
				<div class="row">
					<div class="col-lg-4 price-mobamus"  v-for="item in state.hotelList.filter(h => h.adresse === state.selectedTab)" :key="item.id">
						<div class="price-top">
							<a href="https://www.tripadvisor.com/Hotel_Review-g297953-d472218-Reviews-Mehari_Tabarka-Tabarka_Jendouba_Governorate.html">
								<img src="../../assets/images/sea-view.jpg" alt="" class="img-fluid" />
							</a>
						</div>
						<div class="price-w3ls-bottom p-4">
							<h4 class="my-2"><a href="https://www.tripadvisor.com/Hotel_Review-g297953-d472218-Reviews-Mehari_Tabarka-Tabarka_Jendouba_Governorate.html">{{ item.nomhotel }}</a></h4>
							<div class="lm-item-price">
								<h6>
									<span class="price-top-head">TND</span>
									<span class="price-midd-head">{{ item.prixnuit }}</span>
									<span class="price-right-head">/ par nuit</span>
								</h6>
							</div>
							<ul class="style-lists">
								<li> enfant moins 6 ans gratuit </li>
								<li>Conciergerie VIP pour des recommandations personnalisées</li>
								<li>Logement Petit Déjeuner </li>
							</ul>
							<a href="https://www.tripadvisor.com/Hotel_Review-g297953-d472218-Reviews-Mehari_Tabarka-Tabarka_Jendouba_Governorate.html" class="btn button-style-2 mt-sm-5 mt-4">Voir l'offre</a>
						</div>
					</div>
				</div>
			</div>
		<!-- //price -->
		<br>



		<!-- services -->
		<div class="serives-mobamu py-5" id="services">
			<div class="container py-xl-5 py-lg-3">
				<h3 class="tittle text-center text-wh font-weight-bold">Nos Services</h3>
				<h4 class="sub-tittle text-center text-li mt-2 mb-sm-5 mb-4 pb-xl-3">Nos services sont pensés pour offrir des expériences uniques, façonnant chaque voyage en un souvenir mémorable</h4>
				<div class="row welcome-bottom text-center">
					<div class="col-lg-3 col-sm-6 px-2">
						<div class="welcome-grid bg-wh py-5 px-4">
							<img src="../../assets/images/restau.jpg" alt="" class="img-fluid">
							<h4 class="mt-4 mb-3 text-bl">Restaurant a la carte</h4>
							<p>Service rapide et chaleureux</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 px-2">
						<div class="welcome-grid bg-wh py-5 px-4">
							<img src="../../assets/images/spa.jpg" alt="" class="img-fluid">
							<h4 class="mt-4 mb-3 text-bl">Spa</h4>
							<p>	bien-être propice à la relaxation</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
						<div class="welcome-grid bg-wh py-5 px-4">
							<img src="../../assets/images/espac.jpg" alt="" class="img-fluid">
							<h4 class="mt-4 mb-3 text-bl">Activité pour enfant </h4>
							<p>Amusez vous enfants</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
						<div class="welcome-grid bg-wh py-5 px-4">
							<img src="../../assets/images/fitness-center.jpg" alt="" class="img-fluid">
							<h4 class="mt-4 mb-3 text-bl">Sport</h4>
							<p>Etre actif et sportif</p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- //services -->

	<br> <br>

		<!-- middle -->
		<div>
    <div class="middle py-5">
      <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
          <h3>Profitez de chaque instant avec votre partenaire dans notre complexe hôtelier</h3>
          <router-link to="/Addreservation" class="btn button-style-2 mt-sm-5 mt-4">Réservez</router-link>
        </div>
      </div>
    </div>
  </div>
		<!-- //middle -->

		<!--- newsletter --->
		<div class="newsletter_w3w3pvt py-5">
			<div class="container py-xl-5 py-lg-3">
				<h3 class="tittle text-center text-bl font-weight-bold">Inscrivez-vous à notre newsletter</h3> <br>
				<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">N'hésitez pas à nous envoyer un e-mail si vous avez des questions. Nous sommes là pour vous aider et répondre à toutes vos préoccupations</p>
				<div class="newsletter">
					<form action="mailto:info@example.com" method="post">
						<div class="form-group mb-0 w-100">
							<input class="email" type="email" name="email" placeholder="Your email..." required="">
						</div>
						<button type="submit" class="btn">Inscrivez</button>
					</form>
				</div>
			</div>
		</div>
		<!-- //newsletter -->

		<!-- footer -->
		<footer class="py-5">
			<div class="container pt-xl-4">
				<div class="row footer-top">
					<div class="col-lg-4 col-md-6 footer-grid_section_1its">
						<h2 class="logo-2 mb-lg-4 mb-3">
							<a href="index.html" class="text-uppercase text-wh">Maps</a>
						</h2>
						<!-- Map -->
						<div class="map-fo">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5130900428026!2d44.506621715459396!3d40.17539347939393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1509605601510"></iframe>
						</div>
						<!-- //Map -->
					</div>
					<div class="col-lg-2 col-md-6 footer-grid_section_1its mt-md-0 mt-4">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Liens</h3>
						<ul class="list-unstyled">
							<li class="mb-3">
								<a href="index.html">Acceuil</a>
							</li>
							<li class="mb-3">
								<a href="about.html">A propos Nous</a>
							</li>
							<li class="mb-3">
								<a href="gallery.html">Galerie</a>
							</li>
							<li class="mb-3">
								<a href="#services">Services</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contactez nous</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
						<div class="contact-info">
							<div class="footer-style-w3ls mb-4">
								<h4 class="text-li mb-2">Télephone</h4>
								<p>+216 74 907 987</p>
							</div>
							<div class="footer-style-w3ls mb-4">
								<h4 class="text-li mb-2">Email </h4>
								<p><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="footer-style-w3ls mb-4">
								<h4 class="text-li mb-2">Où nous trouver</h4>
								<p>Sfax route Manzel Chakker</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
						<!-- social icons -->
						<div class="mobamuinfo_social_icons">
							<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Social Info</h3>
							<p>Restez connecté avec nous à travers nos réseaux sociaux pour les dernières mises à jour et informations passionnantes.</p>
							<h4 class="sub-con-fo text-li my-4">Suivez-nous sur les réseaux sociaux</h4>
							<ul class="mobamuits_social_list list-unstyled">
								<li class="w3_mobamu_facebook">
									<a href="#">
										<span class="fa fa-facebook-f"></span>
									</a>
								</li>
								<li class="w3_mobamu_twitter">
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li class="w3_mobamu_dribble">
									<a href="#">
										<span class="fa fa-dribbble"></span>
									</a>
								</li>
								<li class="w3_mobamu_google">
									<a href="#">
										<span class="fa fa-google-plus"></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- social icons -->
					</div>
				</div>
			</div>
		</footer>
		<!-- //footer -->


	</template>
	<script setup>
       import { ref, onMounted, reactive } from 'vue';
        import axios from 'axios';

        const state = reactive({
        hotelList: [],
        selectedTab: null,
        regions: [
            { id: 'tabarka', name: 'Tabarka' },
            { id: 'hammamet', name: 'Hammamet' },
            { id: 'sousse', name: 'Sousse' },
            { id: 'djerba', name: 'Djerba' },
            { id: 'monastir', name: 'Monastir' },
            { id: 'mahdia', name: 'Mahdia' },
        ],
        });

        const fetchHotelList = async () => {
        try {
            const response = await axios.get('http://localhost:8000/api/hotels');
            state.hotelList = response.data;
        } catch (err) {
            console.error(err);
            alert(err);
        }
        };

        onMounted(fetchHotelList);

        const getHotelsByRegion = () => {
        // Fetch and update the hotel list based on the selected region
        fetchHotelList();
        };

        onMounted(() => {
        // Set the default selected tab to the ID of the first region
        state.selectedTab = state.regions[0].id;
        // Initialize the hotel list based on the default selected region
        getHotelsByRegion();
        });

		</script>
		<style>
		@import './style.css';
		</style>
