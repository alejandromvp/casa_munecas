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
.cuadro{
    border: 2px solid  #682c0e;
}
</style>
<template>
    <div class="container-fluid" style="background-color: #F8FAFC;">
        <div class="row d-flex flex-row align-items-center mt-2 mb-2" >
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2 style="color: #c24914;text-align:center;margin-top:1rem;" class="gold-on-gold">Contactanos</h2>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <hr class="linea_titulo">
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    <div class="row" >
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe class="cuadro" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.3349915438575!2d-72.62985268425672!3d-38.75601997959271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDQ1JzIxLjciUyA3MsKwMzcnMzkuNiJX!5e0!3m2!1sen!2scl!4v1610475609344!5m2!1sen!2scl" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4 color1" style="color:white;border-radius:5px;padding:20px;">
        <h3 style="color: #fc8621">Detalles de contacto</h3>
        <p>
          Tirso de Molina 0634
          <br>Temuco, Chile
          <br>
        </p>
        <p>
          <abbr title="Phone">Movil</abbr>: +56987868033
        </p>
        <p>
          <abbr title="Email">Correo</abbr>:
          <a href="mailto:name@example.com">alejandro@example.com
          </a>
        </p>
        <p>
          <abbr title="Hours"></abbr> {{fecha}}
        </p>
      </div>
    </div>
    <!-- /.row -->
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row mb-4" style="background-color: #757575;color:white;border-radius:5px;padding:20px;">
      <div class="col-lg-8 mb-4 ">
        <h3>Envianos tu mensaje</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Nombre completo:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Numero cecular:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mensaje:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <a href="#" class="btn btn-primary">Enviar mensaje</a>
        </form>
      </div>
    </div>
    <!-- /.row -->
    </div>
</template>

<script>
    import moment from "moment";
    export default {
        mounted() {
            console.log('Component mounted.');
            moment.locale('es');
            setInterval(this.update, 1000);
        },
        data(){
            return{
                date: new Date(),
                someDate:new Date(),
                fecha:null
            }
        },
        methods:{
            update() {
                this.date = new Date();
                this.fecha = moment(this.date).format('MMMM Do YYYY, h:mm:ss a');
            },
        }
    }
</script>
