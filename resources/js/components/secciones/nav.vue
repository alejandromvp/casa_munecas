<style>
nav ul li a{
  color:white;
  font-weight: bold;
}
.active{
  color: #fc8621;
  text-decoration:3px underline;
}
.nav-link_{
  margin:0 10px 0 10px;
}
.nav-link_:hover{
  color: #fc8621;
  text-decoration:3px underline;
  transition: all 0.2s ease-out;
  font-size: 17px;
}
</style>
<template>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top color1">
    <div class="container">
      <a class="navbar-brand" href="index.html" style="color: #fc8621;">Abi Shop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a v-bind:class="[class_active[0], 'nav-link_' ]" href="#" v-on:click="onClick_home()">Inicio</a>
          </li>
          <li class="nav-item">
            <a v-bind:class="['nav-link_', class_active[2]]" href="#" v-on:click="onClick_service()">Servicios</a>
          </li>
          <li class="nav-item">
            <a v-bind:class="['nav-link_', class_active[1]]" href="#" v-on:click="onClick_about()">Acerca de nosotros</a>
          </li>
         
          <li class="nav-item">
            <a v-bind:class="['nav-link_', class_active[3]]" href="#" v-on:click="onClick_contactanos()">Contactanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
    export default {
        data(){
            return{
                class_active: ['active', '', '', ''],
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClick_home(){
                this.class_active = ['active','', '', ''];
                this.$emit('active_menu', 0);
                console.log("holaaaaaaaa")
            },
            onClick_about(){
                this.class_active = ['','active', '',''];
                this.$emit('active_menu', 1);
                console.log("perro");
            },
            onClick_service(){
                this.class_active = ['','', 'active', ''];
                this.$emit('active_menu', 2);
            },
            onClick_contactanos(){
                this.class_active = ['','', '', 'active'];
                this.$emit('active_menu', 3);
            },
        }
    }
</script>
