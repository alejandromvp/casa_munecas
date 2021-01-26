<style>

.container_section_hause{
    background: #e9b0df;
    min-height: 600px;
}
.contenedor_casa{
    height: 300px;
    width: 300px;
    perspective: 1000px;
    /* transform-origin:2000px; */
    /* margin: 100px -200px; */
    margin: 0 0 60px 0;
    transform: scale(.8);
    
}
.cont-hijo{
    height: 100%;
    width: 100%;
    transform-style: preserve-3d;
    transform: rotateY(90deg);
    transition: 0.1s;
      /* animation: rotar 30s infinite linear; */   
}
.lado{
    position: absolute;
    height: 100%;
    width: 100%;
}
.frente{
    transform:rotateY(0deg) translateZ(150px);
    clip-path: polygon(50% 0%, 100% 38%, 100% 100%, 0 100%, 0% 38%);
    /* background-color: #5899C1; */
    display: flex;
    flex-direction: column;
}
.atras{
    transform:rotateY(180deg) translateZ(150px);
    clip-path: polygon(50% 0%, 100% 38%, 100% 100%, 0 100%, 0% 38%);
    background-color: #5899C1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.atras h1{
    font-family: sans-serif;
    font-weight: bold;
    font-size: 3em;
    
}
.derecha{
    transform:rotateY(-90deg) translateY(115px) translateZ(150px);
    height: 185px;
    background-color: #5899C1;
   /* display: flex;
    justify-content: space-around;;*/
    
}
.izquierdo{
    transform:rotateY(90deg) translateY(115px) translateZ(150px);
     height: 185px;
    background-color: #5899C1;
}
.arriba{
    transform:rotateX(90deg) translateZ(150px);
   /* background-color: aqua;*/
    transform-style: preserve-3d;
}
.abajo{
     transform:rotateX(-90deg) translateY(-50px) translateX(-45px)translateZ(50px);
    background-color: limegreen;
    width: 400px;
    height: 500px;
    transform-style: preserve-3d;
}
.abajo img{
    transform:translateY(-50px) translateZ(-70px) rotateX(90deg);
    height: 200px;
    
}
.techo{
    height: 110%;
    background-color: #111;
    position: absolute;
}
:root{
    --ancho:20em;
}
.t1{
    transform-origin: right;
    transform: rotateY(-37deg) translateX(-80px)translateZ(60px);
    width:250px;
    background-image: url('/public/images/techo.png');
    background-color: #cccccc;
    
}
.t2{
    transform-origin: ;
    transform: rotateY(37deg) translateX(145px) translateZ(15px);
    width:250px;   
    background-color: #cccccc;
}
.ventanas-arriba{
    width: 60%;
    margin: auto;
    /*border: 2px solid #111;*/
    transform: translateY(50px);
    display: flex;
    justify-content: space-between;
}
.ventanas-arriba .ventana{
    float: left;
   
}
.ventanas-arriba .ventana:nth-child(2){
    
}
.ventanas-arriba2{
    /* width: 60%; */
    margin: auto;
    /*border: 2px solid #111;*/
    transform: translateY(50px);
    display: flex;
    justify-content: space-between;
}
.ventanas-arriba2 .ventana-circular{
    float: left;
   
}
.ventanas-arriba2 .ventana-circular:nth-child(2){
    
}
.box-puerta{
    height: 100px;
    margin: auto;
    width: 70%;
    transform: translateY(15px);
    display: flex;
    justify-content: space-between;
}
.puerta{
    height: 120px;
    width: 80px;
    border: 1px solid #fff;
    /*transform: translateY(200px) translateX(50px);*/
    background-color: #DD37CA;
    display: flex;
    /* justify-content: center;
    flex-wrap: wrap; */
    align-items: center;
    box-shadow: inset 0 0 3px #CF9355 
}
.puerta .cajas{
    box-shadow: 0 0 3px #fff;
    height: 17px;
    width: 15px;
    margin: 1px;
    background-color: #CF9355;
}
.ventana-circular{
    height:46px;
    width: 46px;
    background-color:#DD37CA;
   /* transform: translateY(105px) translateX(180px);*/
    box-shadow: inset 0 0 7px #111;
     display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
    padding: 1px;
    border-radius: 50%;
}
.ventana-circular .lunas1{
    border: 1px solid #fff;
    height: 19px;
    width: 19px;
    border-radius: 100% 0 0 0;
    
    background-color: #76ACC6;
}
.ventana-circular .lunas2{
    border: 1px solid #fff;
    height: 19px;
    width: 19px;
    border-radius: 0 100% 0 0;
    margin-left: 2px;
    background-color: #76ACC6;
}
.ventana-circular .lunas3{
    border: 1px solid #fff;
    height: 19px;
    width: 19px;
    border-radius: 0 0 0 100%;
    background-color: #76ACC6;
}
.ventana-circular .lunas4{
    border: 1px solid #fff;
    height:19px;
    width: 19px;
    margin-left: 2px;
    border-radius: 0 0 100% 0;
    background-color: #76ACC6;
}
.ventana{
    height: 70px;
    width: 50px;
    background-color:#DD37CA;
   /* transform: translateY(105px) translateX(180px);*/
    box-shadow: inset 0 0 7px #111;
     display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
    padding: 1px;
    border-radius: 2px;
}
.ventana_frente{
    height: 70px;
    width: 70px;
    background-color:#DD37CA;
   /* transform: translateY(105px) translateX(180px);*/
    box-shadow: inset 0 0 7px #111;
     display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
    padding: 1px;
    border-radius: 2px;
}
.ventana_frente .lunas{
    background-color: #76ACC6;
    height: 32px;
    width: 32px;
    border: 1px solid #fff;
}
.ventana .lunas{
    border: 1px solid #fff;
    height: 22px;
    width: 22px;
    background-color: #76ACC6;
}
.derecha .ventana{ 
transform: translateY(70px) translateX(180px);
    float: left;
   
}
.derecha .ventana:nth-child(2){
    margin-left: -11em;
}
.izquierdo .ventana{ 
transform: translateY(70px) translateX(180px);
    float: left;
   
}
.izquierdo .ventana:nth-child(2){
    margin-left: -11em;
}

@keyframes rotar{
    
    100%{
        transform:rotateY(360deg)
    }
}
.botones{
    display: grid;
    width: 300px;
    grid-template-columns: 33% 33% 33%;
    grid-template-rows: 33% 33% 33%;
}
.btn_big{
    transition: all 1s ease-out;
}
.btn_big:hover{
    transition: all 1s ease-out;
    /* transform: rotate(360deg); */
    transform:scale(1.1);
}
#close-CSS1 {
    background-image: url( '/images/casa3d/izquierda.png' );
    background-size: 100px 100px;
    height: 100px;  
    width: 100px;
}
#close-CSS2{
    background-image: url( '/images/casa3d/derecha.png' );
    background-size: 100px 100px;
    height: 100px;  
    width: 100px;
}
</style>
<template>
    <div class="container_section_hause">
        <div class="row">
            <div class="col-md-7 col-sm-12" style="display: flex;
                            justify-content: center;
                            align-content: center;
                            margin-top:40px;
                            ">
                <div class="contenedor_casa">
                    <div class="cont-hijo" :style="x">
                        <div class="lado frente"  v-bind:style="{ 'background-image': 'url(images/casa3d/madera3.png)', 'background-size': '282px' }">
                                <div class="ventanas-arriba2">
                                    <div class="ventana-circular">
                                    <div class="lunas1"></div>
                                    <div class="lunas2"></div>
                                    <div class="lunas3"></div>
                                    <div class="lunas4"></div>
                                    <!--<div class="lunas"></div>
                                    <div class="lunas"></div> -->
                                </div>
                               <!--  <div class="ventana">
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                </div> -->
                            </div>
                            <div class="box-puerta">
                                <div class="ventana_frente">
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                    <div class="lunas"></div>
                                </div>
                                 <div class="puerta" :style="color_puerta">
                                    <div class="cajas"></div>
                                    <!-- <div class="cajas"></div>
                                    <div class="cajas"></div>
                                    <div class="cajas"></div>
                                    <div class="cajas"></div>
                                    <div class="cajas"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="lado derecha" v-bind:style="{ 'background-image': 'url(images/casa3d/madera3.png)', 'background-size': '282px' }">
                            <div class="ventana">
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                            </div>
                            <div class="ventana">
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                            </div>
                        </div>
                        <div class="lado izquierdo" v-bind:style="{ 'background-image': 'url(images/casa3d/madera3.png)', 'background-size': '282px' }">
                            <div class="ventana">
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                            </div>
                            <div class="ventana">
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                                <div class="lunas"></div>
                            </div>
                        </div>
                        <div class="lado atras" v-bind:style="{ 'background-image': 'url(images/casa3d/madera3.png)', 'background-size': '282px' }">
                            <h1 style="color:pink;">Abi Shop</h1>
                        </div>
                        <div class="lado arriba">
                            <div class="techo t1"></div>
                            <div class="techo t2"></div>
                        </div>
                        <div class="lado abajo">
                            <!-- <img src="https://res.cloudinary.com/diz8ym76r/image/upload/v1598406385/imagenes/arbol2_ljzqdi.png" alt=""><img src="https://res.cloudinary.com/diz8ym76r/image/upload/v1598406385/imagenes/arbol2_ljzqdi.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div> <!-- div col-md-6 -->
            <div class="col-md-5 col-sm-12">
                <div class="container">
                    <div class="row" style="margin-top:40px;">
                        <div class="col-md-12" style="display: flex;
                            justify-content: center;
                            align-content: center;
                            margin: 0 0 30px 0;
                            flex-direction:column;">
                            <div class="botones">
                                <div></div>
                                <div></div>
                                <div></div>
                                <input type="button" id="close-CSS1" v-on:click="movH_izq">
                                <div></div>
                                <input type="button" id="close-CSS2" v-on:click="movH_right">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div style="margin-top:60px;">
                                Color Puerta: <v-input-colorpicker  v-model="color"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
               array_categorias: [],
               editmode:false,
               puerta :100,
               ventana:100,
               xventana: 0,
               xcasa: 0,
               ycasa: 0,
               error_input_categoria: '',
               color: "#DD37CA"
            };
        },
        computed: {
            x:{
                get:function(){
                   return 'transform: rotateY('+this.xcasa+'deg)' 
                },
            },
            color_puerta:{
                get:function(){
                   return 'background-color: '+this.color
                },
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            menos_ancho_puerta(){
                if(this.puerta < 100/2){
                    this.puerta = this.puerta;
                    console.log("no se puede achicar mas");
                }else{
                    this.puerta = this.puerta - 5;
                    console.log(this.puerta);
                }
            },
            mas_ancho_puerta(){
                if(this.puerta > 200){
                    this.puerta = this.puerta;
                    console.log("no se puede agrandar mas la puerta");
                }else{
                    this.puerta = this.puerta + 5;
                    console.log(this.puerta);
                }
            },
            menos_ancho_ventana(){
                if(this.ventana < 100/2){
                    this.ventana = this.ventana;
                    console.log("no se puede achicar mas");
                }else{
                    this.ventana = this.ventana - 5;
                    console.log(this.ventana);
                }
            },
            mas_ancho_ventana(){
                if(this.ventana > 200){
                    this.ventana = this.ventana;
                    console.log("no se puede agrandar mas la puerta");
                }else{
                    this.ventana = this.ventana + 5;
                    console.log(this.ventana);
                }
            },
            mover_ventana(){
                this.xventana = this.xventana + 10;
                console.log('swswsw'+this.xventana);
            },
            /* movH_arriva(){
                this.ycasa += 5;
            }, */
            movH_izq(){
                this.xcasa += 10;
            },
            movH_right(){
                this.xcasa += -10;
            },
            /* movH_bottom(){
                this.ycasa += -5;
            } */
        }
    }
</script>
