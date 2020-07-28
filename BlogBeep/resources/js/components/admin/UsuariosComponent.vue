<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabListClient" class="mdl-tabs__tab is-active">USUARIOS</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabListClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-success text-center tittles">
                            Lista De Clientes
                        </div>
                        <div class="full-width panel-content">
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
                                        <i class="zmdi zmdi-search"></i>
                                    </label>
                                    <div class="mdl-textfield__expandable-holder">
                                        <input class="mdl-textfield__input" type="text" placeholder="Nombre" id="searchClient" v-model="nombre">
                                        <label class="mdl-textfield__label"></label>
                                    </div>
                                </div>
                            </form>
                            <div class="mdl-list" v-show="nombre === ''">
                                <div class="mdl-list__item mdl-list__item--two-line" v-for="(usuario, index) in usuarios" :key="index">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>{{usuario.name}}</span> <span v-if="usuario.type === 'admin'" class="text-danger">{{usuario.type}}</span> <span v-else class="text-success">{{usuario.type}}</span>
                                        <span class="mdl-list__item-sub-title">{{usuario.telefono}}</span>
                                    </span>
                                    <button class="btn btn-warning btn-sm" @click="cambiarTipo(usuario)">Cambiar Tipo</button>
                                <button class="btn btn-danger btn-sm" @click="eliminar(usuario.id)">Eliminar</button>
                                </div>
                            </div>
                            <div class="mdl-list" v-show="nombre != ''">
                                <div class="mdl-list__item mdl-list__item--two-line" v-for="(usuario, index) in searchUsuarios" :key="index">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>{{usuario.name}}</span> <span v-if="usuario.type === 'admin'" class="text-danger">{{usuario.type}}</span> <span v-else class="text-success">{{usuario.type}}</span>
                                        <span class="mdl-list__item-sub-title">{{usuario.telefono}}</span>
                                    </span>
                                    <button class="btn btn-warning btn-sm" @click="cambiarTipo(usuario)">Cambiar Tipo</button>
                                <button class="btn btn-danger btn-sm" @click="eliminar(usuario.id)">Eliminar</button>
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
        props:['usuarios'],
        data: function(){
            return{
                nombre: '',
            }
        },
        computed:{
            searchUsuarios: function () {
                return this.usuarios.filter((item) => item.name.toLowerCase().includes(this.nombre.toLowerCase()));
            }
        },
        methods:{
            eliminar(id){;
                axios.delete(`/usuarios/${id}`)
                .then(()=>{
                    aler("Usuario Eliminado");
                    this.$emit('getUsuarios');
                });
            },
            cambiarTipo(usuario){
                const params= {
                    type: usuario.type
                }
                axios.put(`/usuario/cambiarTipo/${usuario.id}`, params)
                .then(()=>{
                    this.$emit('getUsuarios');
                });
            },
        }
    }
</script>