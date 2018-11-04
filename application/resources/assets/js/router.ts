import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './pages/Login.vue'
import Test from './pages/Test.vue'
import BasicLayout from './layouts/BasicLayout.vue'
import DashBord from './pages/DashBord.vue'
import Other from './pages/DocumentList.vue';
import DocumentTabLayout from './layouts/DocumentCreateTabLayout.vue'
import Document from './pages/DocumentCreate/BasicSheet.vue';
import CheckSheet from './pages/DocumentCreate/CheckSheet.vue';
import Loading from './components/Loading.vue';
import DocumentDetail from './pages/DocumentDetail.vue';

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes:[
		{path: '/loading',component:Loading},
		{path: '/login', component:Login},
		{path: '/', component:Login},
		{path: '/', component:BasicLayout,children:[
			{path:'dash_bord', component:DashBord},
			{path:'test',component:Test},
			{path:'other',component:Other},
            {path:'document', component:DocumentTabLayout,children:[
				{path:'',component:Document},
				{path:'check_sheet',component:CheckSheet}
			]},
			{path:'document/detail/:id',component:DocumentDetail}
		]}
	]
})

export default router