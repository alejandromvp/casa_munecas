<style>
    .container-fluid{
        width: 80%;
    }
</style>

<template>
    
    <div class="container-fluid">
        <h1>Quienes Somos</h1>
        <!-- Intro Content -->
        <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="images/ceo/abi.jpg" alt="" width="750" height="350">
        </div>
        <div class="col-lg-6">
            <h2>About Modern Businesssss</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>

        
        <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
            <img class="card-img-top" src="images/ceo/hruiz.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Hugo Ruiz</h4>
                <h6 class="card-subtitle mb-2 text-muted">Ing. en contruccion</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
                <a href="#">name@example.com</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
            <img class="card-img-top" src="images/ceo/ale.png" alt="">
            <div class="card-body">
                <h4 class="card-title">Alejandro Villagran</h4>
                <h6 class="card-subtitle mb-2 text-muted">Web Developer</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
                <a href="#">name@example.com</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
                <h4 class="card-title">Team Member</h4>
                <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
                <a href="#">name@example.com</a>
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
