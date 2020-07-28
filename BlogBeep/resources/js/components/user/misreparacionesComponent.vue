<template>
     <div class="container">
        <div class="row">
            <div class="col-lg-12" v-if="contenido === 1">
                <div class="about__pic" v-for="(reparacion, index) in reparaciones" :key="index">
                    <div class="alert alert-success" role="alert" v-if="reparacion.estado === 'terminada'">
                        <h4 class="alert-heading">{{reparacion.estado}}</h4>
                        <p>Respuesta del Tecnico: {{reparacion.rtaTecnico}}</p>
                        <p v-if="reparacion.rtaUsuario != 'No ha respondido'">Respuesta del Usuario: {{reparacion.rtaUsuario}}</p>
                        <hr>
                        <p class="mb-0">Daño: {{reparacion.daño}}</p>
                    </div>
                    <div class="alert alert-warning" role="alert" v-else-if="reparacion.estado === 'en curso' || reparacion.estado === 'en espera de repuesto'">
                        <h4 class="alert-heading">{{reparacion.estado}}</h4>
                        <p>Respuesta del Tecnico: {{reparacion.rtaTecnico}}</p>
                        <hr>
                        <p class="mb-0">Daño: {{reparacion.daño}}</p>
                    </div>
                    <div class="alert alert-danger" role="alert" v-else-if="reparacion.estado === 'en espera de aprobacion'">
                        <h4 class="alert-heading">{{reparacion.estado}}</h4>
                        <p>Respuesta del Tecnico: {{reparacion.rtaTecnico}}</p>
                        <hr>
                        <p class="mb-0">Daño: {{reparacion.daño}}</p>
                    </div>
                    <form @submit.prevent="responder(reparacion)" v-if="reparacion.estado === 'en espera de aprobacion' && reparacion.rtaUsuario === 'No ha respondido'">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" v-model="opcion">
                                <option disabled="" selected="">Elegir...</option>
                                <option value="reparar">Reparar</option>
                                <option value="no reparar">No Reparar</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Texto Adiccional</span>
                            </div>
                            <textarea class="form-control" placeholder="Esto es Opcional" aria-label="With textarea" v-model="rtaUsuario"></textarea>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">Responder</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12"  v-else>
                <div class="about__pic">
                    <div class="alert alert-danger" role="alert">
                        No se ha encontrado ninguna Reparacion con esos datos
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function(){
            return{
                contenido: 0,
                reparaciones: [], 
                telefono: '',
                opcion: "",
                rtaUsuario: "",
                codigoGuardado: "",
            }
        },
        mounted(){
            axios.get(`/usuario/logged`)
            .then(response=>{
                this.telefono= response.data.telefono;
                this.getReparaciones();
            });
        },
        methods:{
            getReparaciones(){
                axios.get(`/misreparaciones/${this.telefono}`)
                .then(response=>{
                    this.reparaciones= response.data;
                    this.contenido = 1;
                });
            },
            responder(reparacion){
                const params= {
                    rtaUsuario: "Opcion: "+ this.opcion+ " , Mensaje: " + this.rtaUsuario,
                    opcion: this.opcion,
                    id: reparacion.id,
                }
                axios.post('/admin/reparaciones/responder', params)
                .then(response=>{
                     axios.get(`/admin/reparaciones/${reparacion.codigo}`)
                    .then(response=>{
                        this.getReparaciones();
                    });
                });
            }
        }
    }
</script>