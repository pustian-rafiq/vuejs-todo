<template>
    <div class="listItemContainer">
        <div class="heading">
            <h2 class="title">Todo List</h2>
            <add-list-item></add-list-item>
        </div>
        <h1>List View</h1>
        <list-view :items="items" />
    </div>
</template>

<script>
import axios from "axios"
import addListItem from "./addListItem.vue"
import listView from "./listView.vue"

export default{
    components: {
        addListItem,
        listView
    },
    data: function(){
        return{
            items: []
        }
    },
    methods: {
        getList(){
            axios.get('api/items')
            .then(response => {
                this.items = response.data.data
                 console.log(response.data.data)
            }).catch(err => {
                console.log(err)
            })
        }
    },
    created(){
        this.getList()
    }

}
</script>

<style scoped>

    .listItemContainer{
        width: 350px;
        margin: auto;
    }
    .heading{
        padding: 10px;
        background: #e6e6e6;
    }
    .title{
        text-align: center;
    }

</style>