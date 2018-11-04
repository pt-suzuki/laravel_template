import Vue from 'vue'
import router from './router'
import App from './layouts/App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

new Vue({
    el: '#wrapper',
    router,
    render:h => h(App),
});