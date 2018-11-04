<template>
    <div class="container">
        <h2 class="m-4">ドキュメント一覧</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="id">ID</label>
                                        <input type="text" id="id" class="form-control col-sm-auto"/>
                                    </div>
                                    <div class="col-auto">
                                        <label for="create_from">作成日</label>
                                        <div class="form-inline">
                                            <input type="text" id="create_from" class="form-control col-sm-auto"/>
                                            <label for="create_to">〜</label>
                                            <input type="text" id="create_to" class="form-control col-sm-auto"/>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label for="status">状態</label>
                                        <select id="status" class="form-control">
                                            <option value="">未選択</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-3">
                                        <div class="d-flex align-items-center">
                                            <input type="button" class="btn-secondary" v-on:click="search()" value="検索"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">会社名</th>
                            <th scope="col">対象期間</th>
                            <th scope="col">状態</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in document_list" v-on:click="redirect(item)">
                            <td>12345</td>
                            <td>契約先A</td>
                            <td>2018/11/01</td>
                            <td>契約前</td>
                        </tr>
                        <ListLoading text="現在アップロード中です..." :show="show"></ListLoading>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import AbstractPresenter from '../layouts/AbstractPresenter'
import Component from "vue-class-component";
import {PageUri} from "../enums/PageUri";
import ListLoading from '../components/ListLoading.vue'

@Component({
    components:{
        ListLoading
    }
})
export default class DocumentListPresenter extends AbstractPresenter{
    document_list:String[] = ["a"];
    show=false

    search(){
        this.show=true
        this.document_list=[]
        setTimeout(this.getList,3000)
    }

    getList(){
        this.document_list = [
            "a", "b","c","d","e","f","g","h","i","j"
        ]
        this.show=false
    }

    redirect(id:string):void{
        this.$router.push({path:"/document/detail/" + id})
    }
}
</script>

<style>

</style>