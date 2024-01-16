<template>
    <div class=" py-xl-5 py-lg-3">
      <h3 class="tittle text-center text-bl font-weight-bold">Register</h3>
      <div class="comment-top mt-5">
        <div class="comment-bottom mobamuinfo_mail_grid_right">
          <form>
            <div class="row">
              <div class="col-lg-6 form-group">
                <label for="name" class="col-sm-4 col-form-label text-md-right">Nom</label>
                <div class="col-lg-12">
                  <input id="name" type="text" class="form-control" v-model="user.name" required autofocus autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6 form-group">
                <label for="lastName" class="col-sm-4 col-form-label text-md-right">Prénom</label>
                <div class="col-lg-12">
                  <input id="lastName" type="text" class="form-control" v-model="user.lastName" required autofocus autocomplete="off">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 form-group">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-lg-12">
                  <input id="email" type="email" class="form-control" v-model="user.email" required autofocus autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6 form-group">
                <label for="phoneNumber" class="col-sm-4 col-form-label text-md-right">Phone Number</label>
                <div class="col-lg-12">
                  <input id="phoneNumber" type="number" class="form-control" v-model="user.phoneNumber" required autofocus autocomplete="off">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-lg-12">
                  <input id="password" type="password" class="form-control" v-model="user.password" required autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6 form-group">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>
                <div class="col-lg-12">
                  <input id="password_confirmation" type="password" class="form-control" v-model="user.password_confirmation" required autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">

            </div>
            <br/>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary" @click="handleSubmit">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import axios from "axios"
  import { useRouter } from 'vue-router';

  const router = useRouter();
  let user = {};

  const handleSubmit = async () => {
    try {
      const response = await axios.post('http://localhost:8000/api/register/', user);
      console.log(response);
      router.replace({ name: 'login' });
    } catch (err) {
      console.error(err);
      alert("Registration failed. Please check your input and try again.");
    }
  };
  </script>

  <style scoped>
  .container {
    position: fixed;
    width: 100%;
    height: 300px;
    margin: 5% auto;
    padding: 20px;
    border: 5px solid #ccc;
    background-color: #fff;
  }
  </style>
