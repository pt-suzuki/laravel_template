import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './pages/Login.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes:[
		{path: '/login', component:Login},
		{path: '/', component:Login}
	]
})

export default router