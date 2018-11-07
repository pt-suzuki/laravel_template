<template>
    <div v-if="show">
        <img src="/img/ajax-loader.gif">&nbsp;<span v-text="text"></span>
    </div>
</template>

<script lang="ts">
    import AbstractPresenter from "../layouts/AbstractPresenter";
    import Component from "vue-class-component";

    @Component({
        props: {
            text: {
                default: 'ロード中...',
                type: String
            },
            show:{
                default: false,
                type: Boolean
            }
        }
    })
    export default class ListLoadingPresenter extends AbstractPresenter{
        text?:string
        show:boolean=false
    }
</script>

<style scoped>

</style>