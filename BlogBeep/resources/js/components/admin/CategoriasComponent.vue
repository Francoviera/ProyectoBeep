<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewCategory" class="mdl-tabs__tab is-active">Nueva</a>
            <a href="#tabListCategory" class="mdl-tabs__tab" @click="getCategorias()">Lista</a>
        </div>
        <div class="mdl-tabs__panel is-active divAgregar" id="tabNewCategory">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Nueva Categoria
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="agregar">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IFORMACION CATEGORIA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameCategory" v-model="categoria.tipo">
                                            <label class="mdl-textfield__label" for="NameCategory">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="descriptionCategory" v-model="categoria.descripcion">
                                            <label class="mdl-textfield__label" for="descriptionCategory">Descripcion</label>
                                            <span class="mdl-textfield__error">Descripcion Invalida</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCategory" type="submit">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addCategory">Agregar categoria</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel divEditar" id="tabNewCategory">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Editar Categoria
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="editar">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IFORMACION CATEGORIA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameCategory" v-model="categoria.tipo">
                                            <label class="mdl-textfield__label" for="NameCategory">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="descriptionCategory" v-model="categoria.descripcion">
                                            <label class="mdl-textfield__label" for="descriptionCategory">Descripcion</label>
                                            <span class="mdl-textfield__error">Descripcion Invalida</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCategory" type="submit">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addCategory">Editar categoria</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel divCategoria" id="tabListCategory">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-success text-center tittles">
                            Lista Categorias
                        </div>
                        <div class="full-width panel-content">
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchCategory">
                                        <i class="zmdi zmdi-search"></i>
                                    </label>
                                    <div class="mdl-textfield__expandable-holder">
                                        <input class="mdl-textfield__input" type="text" id="searchCategory">
                                        <label class="mdl-textfield__label"></label>
                                    </div>
                                </div>
                            </form>
                            <div class="mdl-list">
                                <div v-for="(categoria, index) in categorias" :key="index">
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
                                            <i class="zmdi zmdi-label mdl-list__item-avatar"></i>
                                            <span>1.{{categoria.tipo}}</span>
                                            <span class="mdl-list__item-sub-title">{{categoria.descripcion}}</span>
                                        </span>
                                        <button class="btn btn-warning btn-sm" @click="formEdit(categoria)">Editar</button>
                                        <button class="btn btn-danger btn-sm" @click="eliminar(categoria)">Eliminar</button>								
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
        props:['categorias'],
        data: function(){
            return{
                categoria:{
                    id: "",
                    tipo: '',
                    descripcion: ''
                }
            }
        },
        methods:{
            getCategorias(){
                this.$emit('getCategorias');
            },
            agregar(){
                const params= {
                    tipo: this.categoria.tipo,
                    descripcion: this.categoria.descripcion
                }
                this.categoria.tipo= ' ';
                this.categoria.descripcion= ' ';

                axios.post('/admin/categorias', params)
                .then(res =>{
                    alert('Categoria Cargada');
                });
            },
            editar(){
                let divAgregar= document.querySelector(".divAgregar");
                let divEditar= document.querySelector(".divEditar");
                let divCategoria= document.querySelector(".divCategoria");
                const params= {
                    tipo: this.categoria.tipo,
                    descripcion: this.categoria.descripcion
                }

                axios.put(`/admin/categorias/${this.categoria.id}`, params)
                .then(res=>{

                    this.categoria.tipo= '';
                    this.categoria.descripcion= '';
                });

                divCategoria.classList.toggle("is-active");
                divEditar.classList.toggle("is-active"); 
            },
            eliminar(categoria){
                axios.delete(`/admin/categorias/${categoria.id}`)
                .then(()=>{
                    this.$emit('getCategorias');
                });
            },
            formEdit(categoria){
                let divAgregar= document.querySelector(".divAgregar");
                let divEditar= document.querySelector(".divEditar");
                let divCategoria= document.querySelector(".divCategoria");

                divCategoria.classList.toggle("is-active"); 
                divEditar.classList.toggle("is-active");
                this.categoria.id= categoria.id;
                this.categoria.tipo= categoria.tipo;
                this.categoria.descripcion= categoria.descripcion;   
            }
        }
    }
    
</script>