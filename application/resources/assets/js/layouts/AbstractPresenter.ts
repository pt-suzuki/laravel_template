import Vue from 'vue';
import Component from "vue-class-component";
import * as moment from 'moment';
import ListLoading from '../components/ListLoading.vue'

@Component({
    filters:{
        moment(value:string):string{
            return moment(value).format("YYYY/MM/DD");
        },
        marumeru(value:number):number{
            return Math.floor(value * 100) / 100
        }
    }
})
export default class AbstractPresenter extends Vue{
	$router:any
	$route:any
    $store:any
}