import Vue from 'vue';
import Component from "vue-class-component";

@Component({
    filters:{
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