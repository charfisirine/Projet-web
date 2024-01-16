<template>
    <div class=" py-xl-5 py-lg-3">
      <h3 class="tittle text-center text-bl font-weight-bold">Login</h3>
      <div class="comment-top mt-5">
        <div class="comment-bottom mobamuinfo_mail_grid_right">
          <form>
            <div class="row">
              <div class="col-lg-12 form-group">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-lg-12">
                  <input id="email" type="email" class="form-control" v-model="user.email" required autofocus autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 form-group date-plu">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-lg-12">
                  <input id="password" type="password" class="form-control" v-model="user.password" required autocomplete="off">
                </div>
              </div>



            </div>
            <br/>
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" @click="handleLogin">Login</button>
                </div>
            </div>



          </form>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import axios from 'axios';
  import { useRouter } from 'vue-router';

  const router = useRouter()
  let user = {}

  const handleLogin = async () => {
    axios.post('http://localhost:8000/api/login/', user)
      .then((response) => {
        router.push("/dashboard")
        localStorage.setItem('user', response.data.user.name)
        localStorage.setItem('token', response.data.token)
      })
      .catch(err => {
        console.log(err);
        alert(err)
      })
  }
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
