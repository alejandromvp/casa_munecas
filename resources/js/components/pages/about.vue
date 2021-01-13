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
.card-body{transition: all 0.7s ease-out;}
.card-footer{transition: all 0.7s ease-out;}
.title{transition: all 0.7s ease-out;}
.elevation:hover{
  transition: all 0.7s ease-out;
  box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
  top: -7px;
  border: 1px solid #cccccc;
}
.elevation:hover .card-body{
  transition: all 0.7s ease-out;
  background: #c24914;
}
.elevation:hover .card-footer{
  transition: all 0.7s ease-out;
  background: #c24914;
}
.elevation:hover .title{
  transition: all 0.7s ease-out;
  color:#FFCA28;
}
.linea_titulo {
  background-color: #c24914;
  height: 10px;
  margin-left: 0%;
  width: 100%;
}
.girar {
    transition: all 2.2s ease-out;
}
.girar:hover {
    transition: all 2.2s ease-out;
    transform: rotateY(360deg);
}
.gray {
    filter: grayscale(80%);
}
</style>

<template>
    
    <div class="container-fluid">
        <!-- Intro Content -->
        <div class="row d-flex flex-row align-items-center mt-2 mb-2" style="background-color: #F8FAFC;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2 style="color: #c24914;text-align:center;margin-top:1rem;" class="gold-on-gold">Quienes Somos</h2>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #F8FAFC;"> 
            <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid rounded-circle girar" src="images/ceo/abi.jpg" alt="" width="400px" >
            </div>

            <div class="col-md-6 col-sm-12 color1 " style="color:white;border-radius:5px;padding:20px;">
                <h2>Abi - Directora General</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div> 
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>

        
        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card h-100 elevation">
                <img class="card-img-top" src="images/ceo/hruiz.jpg" alt="" height="400">
                <div class="card-body color3">
                    <h4 class="card-title title">Hugo Ruiz</h4>
                    <h6 class="card-subtitle mb-2 text-dark">Ing. en contruccion</h6>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                </div>
                <!-- <div class="card-footer">
                    <a href="#" class="text-dark">name@example.com</a>
                </div> -->
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card h-100 elevation">
                <img class="card-img-top gray" src="images/ceo/ale.png" alt="" height="400">
                <div class="card-body color3">
                    <h4 class="card-title title">Alejandro Villagran</h4>
                    <h6 class="card-subtitle mb-2 text-dark">Web Developer</h6>
                    <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                </div>
                <!-- <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div> -->
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card h-100 elevation">
                    <img class="card-img-top" src="images/ceo/rebe.jpg" alt="" height="400">
                    <div class="card-body color3">
                        <h4 class="card-title title">Rebe</h4>
                        <h6 class="card-subtitle mb-2 text-dark">Pintora &#9733;</h6>
                        <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <!-- <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
