<template>
    <div class="container" style="width: 70%">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        ログイン
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="account">ユーザーID</label>
                                <input type="text" id="account" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="password">パスワード</label>
                                <input type="text" id="password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" v-on:click="login">ログイン</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <Loading v-if="loading"></Loading>
    </div>
</template>

<script lang="ts" >
import AbstractPresenter from '../layouts/AbstractPresenter'
import Component from "vue-class-component";
import {PageUri} from "../enums/PageUri";
import Loading from "../components/Loading.vue";

@Component({
    components: {
        Loading
    }
})
export default class LoginPresenter extends AbstractPresenter{
    loading = false
    login(){
        this.loading = true
        setTimeout(this.redirect,1000);
    }

    redirect(){
        this.$router.push({path:'/dash_bord'});
    }
}
</script>