import Accueil from './components/accueil.vue';
import viewChambre from './components/chambres/viewChambre.vue';
import addChambre from './components/chambres/addChambre.vue';
import editChambre from './components/chambres/editChambre.vue';


import viewHotel from './components/hotels/viewHotel.vue';
import addHotel from './components/hotels/addHotel.vue';
import editHotel from './components/hotels/editHotel.vue';

import viewReservation from './components/reservations/viewReservation.vue';
import addReservation from './components/reservations/addReservation.vue';
import editReservation from './components/reservations/editReservation.vue';
import Login from './components/authentification/login.vue'
import Register from './components/authentification/register.vue'
import Dashboard from './components/admin/dashboard.vue'
import Payment from './components/reservations/Payment.vue';



  
export const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        },
        {
        name: "register",
        path: "/register",
        component: Register,
        },
        {

        name: "dashboard",
        path: '/dashboard',
        component: Dashboard,
        meta:{isAuth:true}
        },
    {
        name: 'accueil',
        path: '/',
        component: Accueil
    },
    {
        name: 'viewChambre',
        path: '/listchambre',
        component: viewChambre
    },
    {
        name: 'addChambre',
        path: '/Addchambre',
        component: addChambre
    },
    {
        name: 'editChambre',
        path: '/editchambre/:id',
        component: editChambre
    },
    {
        name: 'viewHotel',
        path: '/listhotel',
        component: viewHotel
    },


    {
        name: 'addHotel',
        path: '/Addhotel',
        component: addHotel
    },
    {
        name: 'editHotel',
        path: '/edithotel/:id',
        component: editHotel
    },
    {
        name: 'viewReservation',
        path: '/listereservation',
        component: viewReservation
    },


    {
        name: 'addReservation',
        path: '/Addreservation',
        component: addReservation,
        meta: { requiresAuth: true },    },
    {
        name: 'editReservation',
        path: '/editreservation/:id',
        component: editReservation
    },
    {
        path:'/payment',
        name:'Payment',
        component:Payment
    }
   
];
