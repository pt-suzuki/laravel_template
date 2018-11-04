<template>
    <div class="container">
        <h2 class="m-4">ドキュメント詳細</h2>
        <router-link v-bind:to="{path:'/document'}">編集</router-link>
    </div>
</template>

<script lang="ts">
import AbstractPresenter from "../layouts/AbstractPresenter";
import Component from "vue-class-component";

@Component
export default class DocumentDetailPresenter extends AbstractPresenter{

}
</script>

<style scoped>

</style>