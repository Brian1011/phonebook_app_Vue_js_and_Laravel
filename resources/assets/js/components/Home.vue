<template>
   <div>
       <nav class="panel column is-offset-2 is-8">
           <p class="panel-heading">
               Vuejs Phonebook

               <button class="button is-link is-light" @click="openAdd">
                   Add New
               </button>
           </p>

           <div class="panel-block">
               <p class="control has-icons-left">
                   <input class="input is-small" type="text" placeholder="search">
                   <span class="icon is-small is-left">
        <i class="fa fa-search" aria-hidden="true"></i>
      </span>
               </p>
           </div>

           <a class="panel-block is-active" v-for="item,key in lists">

               <span class="column is-9">
                   {{item.name}}
               </span>

                <span class="panel-icon column is-1">
                    <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
                </span>

                <span class="panel-icon column is-1">
                    <i class="has-text-info fa fa-edit" aria-hidden="true"></i>
                </span>

                <span class="panel-icon column is-1" @click="openShow(key)">
                    <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
                </span>
           </a>

       </nav>
       <Add :openmodal="addActive" @closeRequest="close"></Add>
       <Show :openmodal="showActive" @closeRequest="close"></Show>
   </div>
</template>

<script>
    let Add = require('./Add.vue')
    let Show = require('./show.vue')//import component
    export default{
        components:{Add,Show},
        data(){
            return{
                addActive:'',
                showActive : '',
                lists:{},
                errors:{},
            }
        },
        mounted(){
            //console.log('its working')
            axios.post('/getData')
                .then((response)=>this.lists = response.data)
                .catch((error) => this.errors = error.response.data.errors)
        },
        methods:{
            openAdd(){
                this.addActive = 'is-active';
            },

            //show phonebook details
            openShow(key){
                console.log(this.$children[1].list = this.lists[key])
                this.showActive = 'is-active';
            },

            close(){
                this.addActive = this.showActive = '';
            }

        }
    }

</script>