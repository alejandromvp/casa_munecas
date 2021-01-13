<style>
.container-fluid{
width: 80%;
}
.title{
color:  #682c0e;
font-weight:900;
font-size: 22px;
font-family:euro-bold ;
}
.descripcion{
color:white;
font-family:euro-bold;
font-weight:600;
}

.card-footer{
background-color: #fc8621;
text-align: center;
}
.elevation:hover{
transition: all 0.5s ease-out;
box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
top: -7px;
border: 1px solid #cccccc;
}
.jumbotron{
transition: all 0.7s ease-out;
}

.jumbotron:hover {
transition: all 0.7s ease-out;
background: #fc8621;
}
.elevation:hover .card-footer{
transition: all 0.5s ease-out;
background: #c24914;
}
.elevation:hover .title{
transition: all 0.5s ease-out;
color:#FFCA28;
}
.linea_titulo {
background-color: #c24914;
height: 10px;
margin-left: 0%;
width: 100%;
}
</style>
<template>
    <div class="container-fluid">
        <div class="row d-flex flex-row align-items-center mt-2 mb-2" style="background-color: #F8FAFC;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2 style="color: #c24914;text-align:center;margin-top:1rem;" class="gold-on-gold">Servicios</h2>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-sm-12" v-on:click="Modal_serv_terrazas()">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container" style="min-height:350px;">
                        <!-- <h1 class="display-1" style="font-size:6vw;">Casa de muñecas</h1> -->
                        <!-- Button trigger modal -->
                        <h1 class="display-1" style="font-size:6vw;">Terrazas</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iusto aut voluptate nihil eum doloribus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12" v-on:click="Modal_serv_casas()">
               <div class="jumbotron jumbotron-fluid">
                  <div class="container" style="min-height:350px;">
                        <h1 class="display-1" style="font-size:6vw;">Casas de muñecas</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iusto aut voluptate nihil eum doloribus.</p>
                  </div>
               </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modelos_casas" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true" style="z-index:10000000;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Diseños de casas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/servicios/casas/casa-1.png" alt="" width="200">
                                </div>
                                <div class="col-md-6 ml-auto">
                                    <img src="images/servicios/casas/casa-1.png" alt="" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div> <!-- cierre modal -->
         <!-- Modal -->
        <div class="modal fade" id="modelos_terrazas" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true" style="z-index:10000000;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Diseños terrazas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/servicios/terrazas/1.png" alt="" width="200">
                                </div>
                                <div class="col-md-6 ml-auto">
                                    <img src="images/servicios/terrazas/1.png" alt="" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div> <!-- cierre modal -->
    </div> <!-- cierre main container fluid -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            Modal_serv_casas(_categoria, _index){
            $('#modelos_casas').modal('show');
                
            },
            Modal_serv_terrazas(_categoria, _index){
            $('#modelos_terrazas').modal('show');
                
            },
        }
    }
</script>
