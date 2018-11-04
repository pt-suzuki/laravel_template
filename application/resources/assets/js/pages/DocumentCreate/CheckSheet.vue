<template>
    <form>
        <div class="row">
            <div class="col m-md-3">
                <div class="form-group">
                    <label for="email1">アンケート</label>
                    <input id="email1" type="email" class="form-control"/>
                </div>
            </div>
        </div>
    </form>
</template>

<script lang="ts">
    import AbstractPresenter from '../../layouts/AbstractPresenter'
    import Component from "vue-class-component";

    @Component
    export default class CheckSheetPresenter extends AbstractPresenter{

    }
</script>

<style scoped>

</style>