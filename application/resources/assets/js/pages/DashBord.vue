<template>
    <div class="container">
        <h2 class="m-4">ダッシュボード</h2>
        <div class="row">
            <div class="col-6 m-4">
                <div class="card rounded" style="width: 275px; height: 150px;">
                    <div class="card-body">
                        <h1 class="m-2">A</h1>
                    </div>
                </div>
            </div>
            <div class="col-4 m-4">
                <div class="card rounded " style="width: 275px; height: 150px;">
                    <div class="card-body ">
                        <h1 class="m-2">B</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import AbstractPresenter from "../layouts/AbstractPresenter";
import Component from "vue-class-component";

@Component
export default class DashBordPresenter extends AbstractPresenter{

}
</script>

<style>

</style>