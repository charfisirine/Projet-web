<template>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse">
    <div class="navbar-nav">

    <router-link to="/" class="nav-item nav-link">Accueil</router-link>

    <router-link to="/listchambre" class="nav-item nav-link">Chambre</router-link>

    <router-link to="/Addchambre" class="nav-item nav-link">Add Chambre</router-link>

    <router-link to="/listhotel" class="nav-item nav-link"> Hotel</router-link>

    <router-link to="/Addhotel" class="nav-item nav-link">Add Hotel</router-link>

    <router-link to="/Addchambre" class="nav-item nav-link">Resrevation</router-link>





    </div>
    </div>
    </nav>
    <router-view> </router-view>
    </div>
    </template>
    <script>
    export default {}
    </script>
