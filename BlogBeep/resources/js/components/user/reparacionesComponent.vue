<template>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic" v-if="resultadoReparacion">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Reparacion Exitosa</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <form @submit.prevent="agregar" >
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected disabled >Elegir...</option>
                                    <option value="1">Reparar</option>
                                    <option value="2">No Reparar</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Texto Adiccional</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary">Responder</button>

                            </div>
                        </form>
                    </div>
                    <div class="about__pic" v-else>
                        <div class="alert alert-dark" role="alert">
                            Aca aparecera el Resultado!
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <form @submit.prevent="agregar">
                            <div class="section-title">
                                <h2>Busque su Reparacion aqui</h2>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telefono</span>
                                </div>
                                <input type="phone" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Codigo Reparacion</span>
                                </div>
                                <input type="phone" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1">
                                
                            </div>
                            <div class="input-group mb-3">
                                <button type="submit" class="btn btn-primary">Buscar</button>                           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
    export default {
        data: function(){
            return{
               resultadoReparacion: false, 
            }
        },
    }
</script>
