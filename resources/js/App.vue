
<template>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
          <div class="navbar-nav">
            <router-link to="/" class="nav-item nav-link">Accueil</router-link>
            <router-link to="/Addreservation" class="nav-item nav-link">Reservation</router-link>
            <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
            <router-link to="/login" class="nav-item nav-link">Login</router-link>
            <!-- <button @click="logout" class="nav-item nav-link btn btn-link">Logout</button> -->
            <li class="nav-item"><button @click="logout" class="nav-link">Logout</button></li>

          </div>
        </div>
      </nav>

      <div class="container">


        <router-view></router-view>
      </div>
    </div>
  </template>

  <script setup>
  import axios from 'axios';
  import { useRouter } from 'vue-router';
  const router = useRouter();

  const logout = async () => {
    let token = localStorage.getItem('token');
    console.log(token);

    try {
      await axios.post('http://localhost:8000/api/logout', null, {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      });

      console.log(response);
      localStorage.removeItem('token');
      localStorage.removeItem('user');
      router.push("/login");
    } catch (err) {
      console.error(err);
      alert(err);
    }
  }
  </script>
