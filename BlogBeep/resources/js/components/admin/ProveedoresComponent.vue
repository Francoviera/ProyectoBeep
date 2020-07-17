<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewProvider" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListProvider" class="mdl-tabs__tab">Lista</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewProvider">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Nuevo Proveedor
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="agregar">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION PROVEEDOR</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9 ]*(\.[0-9]+)?" id="NameProvider" v-model="proveedor.name">
                                            <label class="mdl-textfield__label" for="NameProvider">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="tel"  id="phoneProvider" v-model="proveedor.telefono">
                                            <label class="mdl-textfield__label" for="phoneProvider">Telefono</label>
                                            <span class="mdl-textfield__error">Telefono Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="email" id="emailProvider" v-model="proveedor.email">
                                            <label class="mdl-textfield__label" for="emailProvider">E-mail</label>
                                            <span class="mdl-textfield__error">E-mail Invalido</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProvider">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addProvider">Agregar Proveedor</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel divEditar" id="tabNewProvider">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Editar Proveedor
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="editar">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION PROVEEDOR</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9 ]*(\.[0-9]+)?" id="NameProvider" v-model="proveedor.name">
                                            <label class="mdl-textfield__label" for="NameProvider">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="tel"  id="phoneProvider" v-model="proveedor.telefono">
                                            <label class="mdl-textfield__label" for="phoneProvider">Telefono</label>
                                            <span class="mdl-textfield__error">Telefono Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="email" id="emailProvider" v-model="proveedor.email">
                                            <label class="mdl-textfield__label" for="emailProvider">E-mail</label>
                                            <span class="mdl-textfield__error">E-mail Invalido</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProvider">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addProvider">Editar Proveedor</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel divProveedores" id="tabListProvider">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-success text-center tittles">
                            Lista Proveedores
                        </div>
                        <div class="full-width panel-content">
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProvider">
                                        <i class="zmdi zmdi-search"></i>
                                    </label>
                                    <div class="mdl-textfield__expandable-holder">
                                        <input class="mdl-textfield__input" type="text" id="searchProvider">
                                        <label class="mdl-textfield__label"></label>
                                    </div>
                                </div>
                            </form>
                            <div class="mdl-list">
                                <div v-for="(proveedor, index) in proveedores" :key="index">
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
                                            <i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
                                            <span>{{proveedor.name}}</span>
                                            <span class="mdl-list__item-sub-title">{{proveedor.telefono}}</span>
                                            <span class="mdl-list__item-sub-title">{{proveedor.email}}</span>
                                        </span>
                                        <button class="btn btn-warning btn-sm" @click="formEdit(proveedor)">Editar</button>
                                        <button class="btn btn-danger btn-sm" @click="eliminar(proveedor)">Eliminar</button>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</template>
<script>
    export default {
        props:['proveedores'],
        data: function(){
            return{
               proveedor:{
                    id: '',
                    name: '',
                    email: '',
                    telefono: ''
                }
            }
        },
        created(){
        },
        methods:{
            getProveedores(){
                this.$emit('getProveedores');
            },
            agregar(){
                const params= {
                    name: this.proveedor.name,
                    telefono: this.proveedor.telefono,
                    email: this.proveedor.email,
                }
                this.proveedor.name= ' ';
                this.proveedor.telefono= ' ';
                this.proveedor.email= ' ';


                axios.post('/admin/proveedores', params)
                .then(res =>{
                    alert('Proveedor Cargado');
                    this.getProveedores();
                });
            },
            formEdit(proveedor){
                let divEditar= document.querySelector(".divEditar");
                let divProveedores= document.querySelector(".divProveedores");

                divProveedores.classList.toggle("is-active");
                divEditar.classList.toggle("is-active"); 
                
                this.proveedor.id= proveedor.id;
                this.proveedor.name= proveedor.name;
                this.proveedor.telefono= proveedor.telefono;
                this.proveedor.email= proveedor.email; 
            }
        }
    }
</script>