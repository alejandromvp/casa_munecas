<style >
.Main{
    font-size: 18px;
}

</style>
<template>
    <div class="Main">
        <nav-comp @active_menu="pageSection"></nav-comp>
        <home-page v-if="menu_active[0]"></home-page>
        <servicios-page v-if="menu_active[1]"></servicios-page>
        <about-page v-if="menu_active[2]"></about-page>
        <contactanos-page v-if="menu_active[3]"></contactanos-page>
        <formulario-page v-if="menu_active[4]"></formulario-page>
        <footer-comp></footer-comp>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                menu_active: [true, false, false, false, false]
            }
        },
        mounted() {
            console.log('slider montado.')
        },
        methods:{
                pageSection(index){
                    this.menu_active = [false, false, false, false, false];
                    this.menu_active[index] = true; 
                }
        }
    }
</script>
