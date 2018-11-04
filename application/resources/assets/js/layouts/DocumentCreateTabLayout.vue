<template>
    <div class="container">
        <h2 class="m-4">ドキュメント作成・編集</h2>

        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <router-link class="nav-link" :class="{'active': $route.path === '/document'}" v-bind:to="{path:'/document'}">テーブル1</router-link>
                    </li>
                    <li class="nav-item" >
                        <router-link class="nav-link" :class="{'active': $route.path === '/document/check_sheet'}" v-bind:to="{path:'/document/check_sheet'}">テーブル2</router-link>
                    </li>
                </ul>
            </div>
            <transition name="slide-fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>

</template>

<script lang="ts">
import AbstractPresenter from "./AbstractPresenter";
import Component from "vue-class-component";
import {PageUri} from "../enums/PageUri"

@Component
export default class DocumentTabLayoutPresenter extends AbstractPresenter{

}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all .3s ease;
}
.slide-fade-leave-active {
    opacity: 0;
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}
.slide-fade-leave-active {
    position: absolute;
}
</style>