<template>
    <div class="addItem">
        <input type="text" v-model="item.name" />
        <font-awesome-icon 
        icon="plus-square"
        @click="addItem()"
        :class="[item.name ? 'active' : 'inactive', 'plus']"
        />
    </div>
</template>

<script>

import axios from 'axios'

export default{
    data: function() {
        return {
            item: {
                name: ""
            }
        }
    },
    methods: {
        addItem(){
            if(this.item.name == ''){
                return
            }
            axios.post('api/item/store',{
                //item: this.item
            }).then( response => {
                if(response.status == 201){
                    this.item.name == "";
                }
            }).catch( err => {
                console.log(err)
            })
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