<style>
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
.elevation{
  transition: all 2s ease-out;
}
.elevation:hover{
  transition: all 2s ease-out;
  box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
  top: -7px;
  border: 1px solid #cccccc;
}

.card-body{
  transition: all 0.7s ease-out;
}
.card-footer{transition: all 0.7s ease-out;}
.title{transition: all 0.7s ease-out;}
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
</style>
<template>
  <div>
    <!-- Portfolio Section -->
    <div class="row d-flex flex-row align-items-center" style="background-color: #F8FAFC;">
      <div class="col-md-4 col-sm-12">
        <hr class="linea_titulo">
      </div>
      <div class="col-md-4 col-sm-12">
        <h2 style="color: #c24914;text-align:center;margin-top:1rem;" class="gold-on-gold">Nuestros Proyectos</h2>
      </div>
      <div class="col-md-4 col-sm-12">
        <hr class="linea_titulo">
      </div>
    </div>
    <div class="row" style="background-color: #F8FAFC;">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/terraza.jfif" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title"> 
              <a href="#" class="title">Reposera</a>
            </h4>
            <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/casa.jpg" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title">
              <a href="#" class="title">Casa de muñeca</a>
            </h4>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/terraza.jfif" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title">
              <a href="#" class="title">Reposera</a>
            </h4>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
            <div class="card-footer text-muted">
              <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/terraza.jfif" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title">
              <a href="#" class="title">Reposera</a>
            </h4>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/terraza.jfif" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title">
              <a href="#" class="title">Reposera</a>
            </h4>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 elevation">
          <a href="#"><img class="card-img-top" src="images/terraza.jfif" alt="" height="400" width="700"></a>
          <div class="card-body color3">
            <h4 class="card-title">
              <a href="#" class="title">Reposera</a>
            </h4>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-dark">Ver detalles</a>
          </div>
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