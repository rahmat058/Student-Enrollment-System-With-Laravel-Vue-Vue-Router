<template>
  <div>
      <nav class="panel column is-offset-2 is-8">
       <p class="panel-heading">
          Vue js Student Enrollment
          <button class="button is-link is-outlined" @click="addNew">
            Add New
          </button>
       </p>


       <div class="panel-block">
         <p class="control has-icons-left">
           <input class="input is-small" type="text" placeholder="search">
           <span class="icon is-small is-left">
             <i class="fa fa-search"></i>
           </span>
         </p>
       </div>

       <a class="panel-block" v-for="item,key in lists" :key="key">
         <span class="column is-9">
             {{item.name}}
         </span>

         <span class="panel-icon column is-1">
           <i class="has-text-danger fa fa-trash"></i>
         </span>
         <span class="panel-icon column is-1">
           <i class="has-text-info fa fa-edit"></i>
         </span>
         <span class="panel-icon column is-1">
           <i class="has-text-primary fa fa-eye" @click="openShow(key)"></i>
         </span>
       </a>

    </nav>

   <Add :openModal='addActive' @closeRequest='close'></Add>
   <Show :openModal='showActive' @closeRequest='close'></Show>
  </div>
</template>


<script>

let Add      =  require('./Add.vue');
let Show      =  require('./Show.vue');

export default {
    data: function() {
       return {
         addActive: '',
         showActive: '',
         lists: {},
         errors: {}
       }
    },
     components: {
       Add,
       Show
     },
     methods: {
       addNew: function() {
         this.addActive = 'is-active';
       },
       openShow: function(key) {
          this.$children[1].list = this.lists[key]
         this.showActive = 'is-active';
       },
       close: function() {
         this.addActive = this.showActive = '';
       }
     },
     mounted: function() {
        axios.post('/getData')
			.then((response)=> this.lists = this.temp = response.data)
			.catch((error) => this.errors = error.response.data.errors)
     }
}

</script>
