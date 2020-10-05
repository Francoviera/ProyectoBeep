<template>
    <div>
        <section class="about-services spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <title>Reparaciones</title>
                            <h2>Imagenes de Muestra</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__services__item"  @click="showCelulares()">
                            <div class="about__services__item__pic set-bg">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="about__services__item__text">
                                <h4>Celulares</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__services__item" @click="showComputadoras()">
                            <div class="about__services__item__pic set-bg">
                                <div class="icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                            </div>
                            <div class="about__services__item__text">
                                <h4>Computadoras</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="about-pic">
            <div class="container">
                <transition-group name="zoom" tag="div">
                    <div class="row" key='celular' v-show="celulares">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/simroto.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/moduloroto.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/taller.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" key='computadora' v-show="!celulares">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/cpuInterno2.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/cpuInterno.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/cpu.jpg" alt="">
                                </div> 
                                <div class="col-lg-6 col-md-6 p-0">
                                    <img height="500px" src="imgReparaciones/ventilador.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function(){
            return{
                celulares: true,   
            }
        },
        methods:{
            showComputadoras(){
                this.celulares= false;
            },
            showCelulares(){
                this.celulares= true;
            },
        }
    }
</script>