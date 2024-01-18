<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav">
        <router-link to="/" class="nav-item nav-link">Accueil</router-link>
        <router-link to="/Addreservation" class="nav-item nav-link">Reservation</router-link>
        <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
      </div>
    </div>

    <div class="navbar-nav">
      
      <button @click="logout" class="nav-link">Logout</button>
          <!-- <router-link to="/login" class="nav-item nav-link">Login</router-link> -->
          <router-link to="/login" class="nav-item nav-link">Login</router-link>
    </div>
  </nav>
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


router.push("/login")
})
.catch(err => {console.log(err);alert(err) })

}
</script>

<style scoped>
  .nav-item {
    margin-right: 30px; /* Ajustez la valeur selon vos préférences */
  }

  .nav-item:last-child {
    margin-right: 0; /* Supprime la marge pour le dernier élément */
  }
</style>