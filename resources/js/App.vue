<template>
<<<<<<< HEAD
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
          <div class="navbar-nav">
            <router-link to="/" class="nav-item nav-link">Accueil</router-link>
            <router-link to="/Addreservation" class="nav-item nav-link"> Reservation</router-link>
            <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
            <router-link to="/login" class="nav-item nav-link">Login</router-link>
            <router-link to="/register" class="nav-item nav-link">Register</router-link>
            <li class="nav-item"><button @click="logout" class="nav-link">Logout</button></li>
          </div>
        </div>
      </nav>
=======
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse">
    <div class="navbar-nav mr-auto">
      <router-link to="/" class="nav-item nav-link">Accueil</router-link>
      <router-link to="/listhotel" class="nav-item nav-link"> Hotel</router-link>
      <router-link to="/lisChambre" class="nav-item nav-link"> Chambre</router-link>
      <router-link to="/Addreservation" class="nav-item nav-link"> Reservation</router-link>
      <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
      <router-link to="/login" class="nav-item nav-link">Login</router-link>
      <router-link to="/register" class="nav-item nav-link">Register</router-link>
    </div>
  </div> <!-- Fermeture de la balise collapse navbar-collapse -->
  <div class="navbar-nav ml-auto">
    <li class="nav-item"><button @click="logout" class="nav-link">Logout</button></li>
  </div>
</nav>

>>>>>>> 7670294429d8cfeaa127750905b2f1e50dc36a54
      <router-view></router-view>
    </div>
  </template>

<script setup>
import axios from 'axios';
import { useRouter } from 'vue-router';
const router = useRouter();
const logout=async()=> {
let token=""

token=localStorage.getItem('token')
console.log(token)
axios.post('http://localhost:8000/api/logout', null, {

headers: {
'Authorization': `Bearer ${token}`
}
})

.then((response) => {
console.log(response)
localStorage.removeItem('token')
localStorage.removeItem('user')

11
router.push("/login")
})
.catch(err => {console.log(err);alert(err) })

}
</script>

