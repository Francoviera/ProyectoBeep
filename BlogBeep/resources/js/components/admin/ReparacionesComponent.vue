<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewPayment" class="mdl-tabs__tab is-active">NUEVO</a>
            <a href="#tabListPayment" class="mdl-tabs__tab" @click="getReparaciones()">LISTA</a>
        </div>
        <div class="mdl-tabs__panel is-active divAgregar" id="tabNewPayment">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nueva Reparacion
                            </div>
                            <div class="full-width panel-content">
                                <form @submit.prevent="agregar">
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION BASICA</legend><br>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.nombre" >
                                                <label class="mdl-textfield__label" for="NameProduct">Nombre</label>
                                                <span class="mdl-textfield__error">Nombre Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?"  v-model="reparacion.telefono" >
                                                <label class="mdl-textfield__label" for="StrockProduct">Telefono</label>
                                                <span class="mdl-textfield__error">Numero Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?"  v-model="reparacion.codigo">
                                                <label class="mdl-textfield__label" for="PriceProduct">Codigo Reparacion</label>
                                                <span class="mdl-textfield__error">Codigo Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Articulo</legend><br>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct" v-model="reparacion.articulo" >
                                                <label class="mdl-textfield__label" for="NameProduct">Articulo</label>
                                                <span class="mdl-textfield__error">Articulo Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="StrockProduct" v-model="reparacion.marca" >
                                                <label class="mdl-textfield__label" for="NameProduct">Marca</label>
                                                <span class="mdl-textfield__error">Marca Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="PriceProduct" v-model="reparacion.modelo" >
                                                <label class="mdl-textfield__label" for="NameProduct">Modelo</label>
                                                <span class="mdl-textfield__error">Modelo Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.daño" >
                                                <label class="mdl-textfield__label" for="NameProduct">daño</label>
                                                <span class="mdl-textfield__error">Daño Invalido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Estado</legend><br>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select v-model="reparacion.estado" class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Seleccione</option>
                                                    <option value="en curso">en curso</option>
                                                    <option value="en espera de respuesto">en espera de respuesto</option>
                                                    <option value="terminada">terminada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Respuesta</legend><br>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.rtaTecnico" >
                                                <label class="mdl-textfield__label" for="NameProduct">respuesta del Tecnico</label>
                                                <span class="mdl-textfield__error">Respuesta Invalida</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct" type="submit">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addProduct">Agregar Producto</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel divReparaciones" id="tabListPayment">
            <div class="mdl-grid"  v-show="!modoEditar">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                                <i class="zmdi zmdi-search"></i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="searchProduct">
                                <label class="mdl-textfield__label"></label>
                            </div>
                        </div>
                    </form>
                    <!-- <nav class="full-width menu-categories">
                        <ul class="list-unstyle text-center">
                            <li ><a href="#!" >{{}}</a></li>
                            
                        </ul>
                    </nav> -->
                    <div class="full-width text-center" style="padding: 30px 0;">
                        <div class="mdl-card mdl-shadow--2dp full-width product-card" v-for="(reparacion, index) in reparaciones" :key="index">
                            <div class="mdl-card__title">
                                <h4>{{reparacion.nombre}}</h4>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <span>Codigo: </span><span class="text">{{reparacion.codigo}}</span><br>
                                <span>Telefono: </span><span>{{reparacion.telefono}}</span><br>
                                <span> </span><br>
                                <span class="text-danger">Daño: </span><span>{{reparacion.daño}}</span><br>
                                <span></span><br>
                                <span class="text-primary">Rta Tecnico: </span><span>{{reparacion.rtaTecnico}}</span><br>
                                <span class="text-success">Rta Usuario: </span><span>{{reparacion.rtaUsuario}}</span><br>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                {{reparacion.estado}}
                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal" @click="eliminar(reparacion.id)"><i class="fas fa-trash-alt"></i></button>
                                <button class="btn btn-sm" @click="formEdit(reparacion)"><i class="far fa-edit"></i></button>
                            </div>
                        </div>   
                    </div>
                    
                </div>
            </div>
            <div class="mdl-grid"  v-show="modoEditar">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Editar Reparacion
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="editar">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION BASICA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.nombre" >
                                            <label class="mdl-textfield__label" for="NameProduct">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?"  v-model="reparacion.telefono" >
                                            <label class="mdl-textfield__label" for="StrockProduct">Telefono</label>
                                            <span class="mdl-textfield__error">Numero Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?"  v-model="reparacion.codigo">
                                            <label class="mdl-textfield__label" for="PriceProduct">Codigo Reparacion</label>
                                            <span class="mdl-textfield__error">Codigo Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Articulo</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct" v-model="reparacion.articulo" >
                                            <label class="mdl-textfield__label" for="NameProduct">Articulo</label>
                                            <span class="mdl-textfield__error">Articulo Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="StrockProduct" v-model="reparacion.marca" >
                                            <label class="mdl-textfield__label" for="NameProduct">Marca</label>
                                            <span class="mdl-textfield__error">Marca Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="PriceProduct" v-model="reparacion.modelo" >
                                            <label class="mdl-textfield__label" for="NameProduct">Modelo</label>
                                            <span class="mdl-textfield__error">Modelo Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.daño" >
                                            <label class="mdl-textfield__label" for="NameProduct">daño</label>
                                            <span class="mdl-textfield__error">Daño Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Estado</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select v-model="reparacion.estado" class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">{{reparacion.estado}}</option>
                                                <option value="en curso">en curso</option>
                                                <option value="en espera de respuesto">en espera de respuesto</option>
                                                <option value="terminada">terminada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Respuesta</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" v-model="reparacion.rtaTecnico" >
                                            <label class="mdl-textfield__label" for="NameProduct">respuesta del Tecnico</label>
                                            <span class="mdl-textfield__error">Respuesta Invalida</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct" type="submit">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addProduct">Editar Producto</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
          props:['reparaciones'],
        data: function(){
            return{
                modoEditar: false,
                reparacion: {
                    id: "",
                    nombre: "",
                    articulo: "",
                    marca: "",
                    modelo: "",
                    codigoReparacion: "",
                    telefono: "",
                    daño: "",
                    rtaTecnico: "",
                    estado: "",
                }
            }
        },
        created(){

        },
        computed:{
            
        },
        methods:{
            getReparaciones(){
                this.$emit('getReparaciones');
                
            },
            agregar(){
                const params= {
                    nombre: this.reparacion.nombre,
                    telefono: this.reparacion.telefono,
                    daño: this.reparacion.daño,
                    rtaTecnico: this.reparacion.rtaTecnico,
                    rtaUsuario: "No ha respondido",
                    articulo: this.reparacion.articulo,
                    marca: this.reparacion.marca,
                    modelo: this.reparacion.modelo,
                    codigo: this.reparacion.codigo,
                    estado: this.reparacion.estado,
                }
                axios.post('/admin/reparaciones', params)
                .then(res =>{
                    this.reparacion.nombre= "";
                    this.reparacion.telefono= "";
                    this.reparacion.daño= "";
                    this.reparacion.rtaTecnico= "";
                    this.reparacion.rtaUsuario= "";
                    this.reparacion.articulo= "";
                    this.reparacion.marca= "";
                    this.reparacion.modelo= "";
                    this.reparacion.codigo= "";
                    this.reparacion.estado= "";
                });
                this.getReparaciones();
            },
            editar(){
                const params= {
                    nombre: this.reparacion.nombre,
                    telefono: this.reparacion.telefono,
                    daño: this.reparacion.daño,
                    rtaTecnico: this.reparacion.rtaTecnico,
                    rtaUsuario: this.reparacion.rtaUsuario,
                    articulo: this.reparacion.articulo,
                    marca: this.reparacion.marca,
                    modelo: this.reparacion.modelo,
                    codigo: this.reparacion.codigo,
                    estado: this.reparacion.estado,
                }
                axios.put(`/admin/reparaciones/${this.reparacion.id}`, params)
                .then(res=>{
                    this.reparacion.id= "",
                    this.reparacion.nombre= "";
                    this.reparacion.telefono= "";
                    this.reparacion.daño= "";
                    this.reparacion.rtaTecnico= "";
                    this.reparacion.rtaUsuario= "";
                    this.reparacion.articulo= "";
                    this.reparacion.marca= "";
                    this.reparacion.modelo= "";
                    this.reparacion.codigo= "";
                    this.reparacion.estado= "";
                });
                this.getReparaciones();
                this.modoEditar= false;
            },
            formEdit(reparacion){
                this.modoEditar= true;

                this.reparacion.id= reparacion.id;
                this.reparacion.nombre= reparacion.nombre;
                this.reparacion.telefono= reparacion.telefono;
                this.reparacion.daño= reparacion.daño;
                this.reparacion.rtaTecnico= reparacion.rtaTecnico;
                this.reparacion.rtaUsuario= reparacion.rtaUsuario;
                this.reparacion.articulo= reparacion.articulo;
                this.reparacion.marca= reparacion.marca;
                this.reparacion.modelo= reparacion.modelo;
                this.reparacion.codigo= reparacion.codigo;
                this.reparacion.estado= reparacion.estado;
            },
            eliminar(id){
                axios.delete(`/admin/reparaciones/${id}`)
                .then(()=>{
                    this.getReparaciones();
                });       
            }
        }
    }
</script>