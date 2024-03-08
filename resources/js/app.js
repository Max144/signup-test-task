import './bootstrap';
import Vue from 'vue'
window.Vue = Vue;

import vuetify from 'vuetify'
import SignUpForm from './components/SignUpForm.vue';
Vue.component('signupform', SignUpForm);

const app = new Vue({
    el:'#app',
    vuetify
});