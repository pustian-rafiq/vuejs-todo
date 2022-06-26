<template>
    <div class="listItemContainer">
        <div class="heading">
            <h2 class="title">Todo List</h2>
            <add-list-item></add-list-item>
        </div>
        <list-view></list-view>
    </div>
</template>

<script>
import addListItem from "./addListItem"
import listView from "./listView"

export default{
components: {
    addListItem,
    listView
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