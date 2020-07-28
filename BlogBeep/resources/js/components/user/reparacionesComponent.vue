<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <form @submit.prevent="getReparacion">
                        <div class="section-title">
                            <h2>Busque su Reparacion aqui</h2>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Telefono</span>
                            </div>
                            <input type="phone" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1" v-model="telefono">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Codigo Reparacion</span>
                            </div>
                            <input type="phone" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1" v-model="codigo">
                            
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Buscar</button>                           
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__pic" v-if="resultadoReparacion === 1">
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
                    <form @submit.prevent="responder" v-if="reparacion.estado === 'en espera de aprobacion' && reparacion.rtaUsuario === 'No ha respondido'">
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
                <div class="about__pic" v-else-if="resultadoReparacion === 0">
                    <div class="alert alert-dark" role="alert">
                        Aca aparecera el Resultado!
                    </div>
                </div>
                <div class="about__pic" v-else-if="resultadoReparacion === -1">
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
               resultadoReparacion: 0, 
               telefono: '',
               codigo: '',
               reparacion: {
                    id: "",
                    nombre: "",
                    articulo: "",
                    marca: "",
                    modelo: "",
                    daño: "",
                    rtaTecnico: "",
                    rtaUsuario: "",
                    estado: "",
                    codigo: "",
                },
                opcion: "",
                rtaUsuario: "",
                codigoGuardado: "",
            }
        },
        methods:{
            getReparacion(){
                if (this.codigo != '' && this.telefono != '') {                    
                    this.codigoGuardado= this.codigo;
                    axios.get(`/admin/reparaciones/${this.codigo}`)
                    .then(response=>{
                        if(response.data == ''){
                            this.resultadoReparacion = -1;
                        }else{
                            this.reparacion.nombre = response.data[0].nombre;
                            this.reparacion.articulo = response.data[0].articulo;
                            this.reparacion.daño = response.data[0].daño;
                            this.reparacion.rtaTecnico = response.data[0].rtaTecnico;
                            this.reparacion.estado = response.data[0].estado;
                            this.reparacion.rtaUsuario = response.data[0].rtaUsuario;
                            this.reparacion.id = response.data[0].id;
                            this.resultadoReparacion = 1;
                            // console.log(this.reparacion);
                            console.log(response.data);
                        }
    
                    });
                }else{
                    this.resultadoReparacion = -1;
                }
            },
            responder(){
                const params= {
                    rtaUsuario: "Opcion: "+ this.opcion+ " , Mensaje: " + this.rtaUsuario,
                    opcion: this.opcion,
                    id: this.reparacion.id,
                }
                axios.post('/admin/reparaciones/responder', params)
                .then(response=>{
                     axios.get(`/admin/reparaciones/${this.codigo}`)
                    .then(response=>{
                            this.reparacion.nombre = response.data[0].nombre;
                            this.reparacion.articulo = response.data[0].articulo;
                            this.reparacion.daño = response.data[0].daño;
                            this.reparacion.rtaTecnico = response.data[0].rtaTecnico;
                            this.reparacion.estado = response.data[0].estado;
                            this.reparacion.rtaUsuario = response.data[0].rtaUsuario;
                            this.reparacion.id = response.data[0].id;
                    });
                });
            }
        }
    }
</script>
