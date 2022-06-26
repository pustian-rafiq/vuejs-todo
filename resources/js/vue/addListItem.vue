<template>
    <div class="addItem">
        <input type="text" v-model="item.name" />
        <font-awesome-icon 
        icon="plus-square"
        :class="[item.name ? 'active' : 'inactive', 'plus']"
        />
    </div>
</template>

<script>
export default{
    data: function() {
        return {
            item: {
                name: ""
            }
        }
    }
}
</script>

<style scoped>
 .addItem{
    display: flex;
    justify-content: center;
    align-items: center;
 }
 input{
    background-color: #f7f7f7;
    border: 0px;
    padding: 5px;
    outline: none;
    margin-right: 10px;
    width: 100%;
 }

.plus{
    font-size: 20px;
}
.active{
    color: aquamarine;
}
.inactive{
    color: #999999;
}
</style>