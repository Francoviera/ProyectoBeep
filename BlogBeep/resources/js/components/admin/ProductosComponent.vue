<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewProduct" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListProducts" class="mdl-tabs__tab" @click="getCategorias()">Lista</a>
        </div>
        <div class="mdl-tabs__panel is-active divAgregar" id="tabNewProduct">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Nuevo Producto
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="agregar" >
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION BASICA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct" v-model="producto.nombre" >
                                            <label class="mdl-textfield__label" for="NameProduct">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct" v-model="producto.cantidad" >
                                            <label class="mdl-textfield__label" for="StrockProduct">Cantidad</label>
                                            <span class="mdl-textfield__error">Numero Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct" v-model="producto.precio">
                                            <label class="mdl-textfield__label" for="PriceProduct">Precio</label>
                                            <span class="mdl-textfield__error">Precio Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORIA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select v-model="producto.id_categoria" class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Seleccione</option>
                                                <option v-for="(categoria, index) in categorias" :key="index" v-bind:value="{ categoria}">{{categoria.tipo}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; PROVEEDOR</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Proveedor</option>
                                                <option value="">Provider 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IMAGEN</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Estado</option>
                                                <option value="">Con Stock</option>
                                                <option value="">Sin Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="file">
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
        <div class="mdl-tabs__panel is-active divEditar" id="tabNewProduct">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Editar Producto
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="editar" >
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION BASICA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct" v-model="producto.nombre" >
                                            <label class="mdl-textfield__label" for="NameProduct">Nombre</label>
                                            <span class="mdl-textfield__error">Nombre Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct" v-model="producto.cantidad" >
                                            <label class="mdl-textfield__label" for="StrockProduct">Cantidad</label>
                                            <span class="mdl-textfield__error">Numero Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct" v-model="producto.precio">
                                            <label class="mdl-textfield__label" for="PriceProduct">Precio</label>
                                            <span class="mdl-textfield__error">Precio Invalido</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORIA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select v-model="producto.id_categoria" class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Seleccione</option>
                                                <option v-for="(categoria, index) in categorias" :key="index" v-bind:value="{ categoria}">{{categoria.tipo}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; PROVEEDOR</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Proveedor</option>
                                                <option value="">Provider 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IMAGEN</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Estado</option>
                                                <option value="">Con Stock</option>
                                                <option value="">Sin Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="file">
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
        <div class="mdl-tabs__panel divProductos" id="tabListProducts">
            <div class="mdl-grid">
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
                    <nav class="full-width menu-categories">
                        <ul class="list-unstyle text-center">
                            <li v-for="(categoria, index) in categorias" :key="index"><a href="#!" @click="getCategoria(categoria.id)">{{categoria.tipo}}</a></li>
                            
                        </ul>
                    </nav>
                    <div class="full-width text-center" style="padding: 30px 0;">
                        <div class="mdl-card mdl-shadow--2dp full-width product-card" v-for="(producto, index) in productos" :key="index">
                            <div class="mdl-card__title">
                                <img v-bind:src="'img/fontLogin.jpg'" alt="product" class="img-responsive">
                            </div>
                            <div class="mdl-card__supporting-text">
                                <small>{{producto.cantidad}}</small><br>
                                <small>{{producto.precio}}</small>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                {{producto.nombre}}
                                <button class="btn btn-warning btn-sm" @click="formEdit(producto)">Editar</button>
                                <button class="btn btn-danger btn-sm" @click="eliminar(producto, index)">Eliminar</button>								
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
        props:['user', 'productos', 'categorias'],
        data: function(){
            return{
               modoEditar:false, 
               producto:{
                    nombre: '',
                    precio: '',
                    cantidad: '',
                    id_categoria: ''
                }
            }
        },
        created(){

        },
        methods:{
            getProductos(){
                this.$emit('getProductos');
            },
            getCategorias(){
                this.$emit('getCategorias');
            },
            getCategoria(id){
                this.$emit('getCategoria', id);

            },
            agregar(){
                const params= {
                    nombre: this.producto.nombre,
                    precio: this.producto.precio,
                    cantidad: this.producto.cantidad,
                    id_categoria: this.producto.id_categoria.categoria.id
                }
                this.producto.nombre= ' ';
                this.producto.precio= ' ';
                this.producto.cantidad= ' ';
                this.producto.id_categoria= ' ';

                axios.post('/admin/productos', params)
                .then(res =>{
                    alert('Producto Cargado');

                });
            },
            editar(){
                let divAgregar= document.querySelector(".divAgregar");
                let divEditar= document.querySelector(".divEditar");
                let divProductos= document.querySelector(".divProductos");
                console.log(this.producto.id);
                const params= {
                    nombre: this.producto.nombre,
                    precio: this.producto.precio,
                    cantidad: this.producto.cantidad,
                    id_categoria: this.producto.id_categoria
                }

                axios.put(`/admin/productos/${this.producto.id}`, params)
                .then(res=>{
                    this.modoEditar = false;
                    const index = this.productos.findIndex(busqueda => busqueda.id === res.data.id);
                    this.productos[index].nombre = res.data.nombre;
                    this.productos[index].precio = res.data.precio;
                    this.productos[index].cantidad = res.data.cantidad;
                    this.productos[index].id_categoria = res.data.id_categoria;

                    this.producto.nombre= '';
                    this.producto.precio= '';
                    this.producto.cantidad= '';
                    this.producto.id_categoria= '';
                });

                divProductos.classList.toggle("is-active");
                divEditar.classList.toggle("is-active"); 
            },
            eliminar(producto, index){
                console.log('llego');
                axios.delete(`/admin/productos/${producto.id}`)
                .then(()=>{
                    this.$emit('getCategoria', producto.id_categoria);
                });
            },
            formEdit(producto){
                let divAgregar= document.querySelector(".divAgregar");
                let divEditar= document.querySelector(".divEditar");
                let divProductos= document.querySelector(".divProductos");

                divProductos.classList.toggle("is-active");
                divEditar.classList.toggle("is-active"); 

                this.producto.id= producto.id;
                this.producto.nombre= producto.nombre;
                this.producto.precio= producto.precio;
                this.producto.cantidad= producto.cantidad;
                this.producto.id_categoria= producto.id_categoria;         
            }
        }
    }
</script>