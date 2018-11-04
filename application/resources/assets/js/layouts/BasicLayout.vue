<template>
    <div class="container">
        <div class="navbar border">
            <ul class="nav mr-auto">
                <li class="nav-item ">
                    <router-link class="nav-link" v-bind:to="{path:'/dash_bord'}">ダッシュボード</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" v-bind:to="{path:'/document'}">ドキュメント</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" v-bind:to="{path:'/test'}">テスト</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" v-bind:to="{path:'/other'}">その他</router-link>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"  v-on:click="logout">ログアウト</a>
                </li>
            </ul>
        </div>

        <transition name="fade">
            <router-view></router-view>
        </transition>
        <Loading v-if="loading">
        </Loading>
    </div>
</template>


<script lang="ts">
    import {PageUri} from "../enums/PageUri"
    import AbstractPresenter from "./AbstractPresenter";
    import Component from "vue-class-component";
    import Loading from "../components/PageLoading.vue"

    @Component({
        components:{
            Loading
        }
    })
    export default class BasicLayoutPresenter extends AbstractPresenter{
        loading:boolean = false;
        logout(){
            this.loading = true;
            setTimeout(this.redirect,1000);
        }

        redirect(){
            this.$router.push({path:PageUri.AUTH.LOGIN});
        }
    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-to {
        opacity: 0
    }
    .fade-leave-active {
        position: absolute;
    }
</style>
