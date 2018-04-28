<template>
   <div class="modal" :class='openModal'>
     <div class="modal-background"></div>
     <div class="modal-card">
       <header class="modal-card-head">
         <p class="modal-card-title">Modal title</p>
         <button class="delete" aria-label="close" @click='closeModal'></button>
       </header>
       <section class="modal-card-body">

          <li class="panel-block">
               <label class="column is-2">Name</label>  {{list.name}}
          </li>

          <li class="panel-block">
               <label class="column is-2">Phone</label>  {{list.phone}}
          </li>

          <li class="panel-block">
               <label class="column is-2">Email</label>  {{list.email}}
          </li>

       </section>
       <footer class="modal-card-foot">
         <button class="button" @click='closeModal'>Cancel</button>
       </footer>
     </div>
 </div>

</template>


<script>
   export default {
   props:["openModal"], 
   data: function() {
      return {
         list: ''
      }
   },
   methods: {
    closeModal: function() {
        this.$emit('closeRequest');
    }
  }
   }
</script>

