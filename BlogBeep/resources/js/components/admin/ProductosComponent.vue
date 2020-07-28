<template>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewProduct" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListProducts" class="mdl-tabs__tab" @click="getCategorias(), getProductos()">Lista</a>
        </div>
        <div class="mdl-tabs__panel is-active divAgregar" id="tabNewProduct">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Nuevo Producto
                        </div>
                        <div class="full-width panel-content">
                            <form @submit.prevent="agregar" enctype="multipart/form-data">
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
                                            <select v-model="producto.id_proveedor" class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Seleccione</option>
                                                <option v-for="(proveedor, index) in proveedores" :key="index" v-bind:value="{ proveedor}">{{proveedor.name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IMAGEN</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="file" @change="obtenerImagen">
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <img width="200" height="200" :src="imagen">
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
        <div class="mdl-tabs__panel divEditar" id="tabNewProduct">
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
                                            <select v-model="producto.id_proveedor" class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Seleccione</option>
                                                <option v-for="(proveedor, index) in proveedores" :key="index" v-bind:value="{ proveedor}">{{proveedor.name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; IMAGEN</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="file" @change="obtenerImagen">
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <img width="200" height="200" :src="imagen">
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
                                <input class="mdl-textfield__input" type="text" placeholder="Nombre" id="searchProduct" v-model="nombre">
                                <label class="mdl-textfield__label"></label>
                            </div>
                        </div>
                    </form>
                    <nav class="full-width menu-categories" v-show="nombre === ''">
                        <ul class="list-unstyle text-center">
                            <li v-for="(categoria, index) in categorias" :key="index"><a href="#!" @click="getCategoria(categoria.id)">{{categoria.tipo}}</a></li>
                            
                        </ul>
                    </nav>
                    <div class="full-width text-center" style="padding: 30px 0;" v-show="nombre === ''">
                        <div class="mdl-card mdl-shadow--2dp full-width product-card" v-for="(producto, index) in productos" :key="index">
                            <div class="mdl-card__title">
                                <!-- <img v-bind:src="'public/storage/app/'+producto.img"> -->
                                <img width="200" height="180" :src="'/imgProductos/'+producto.img">
                                <!-- <img :src="require('/storage/app'+producto.img)" /> -->
                            </div>
                            <div class="mdl-card__supporting-text">
                                <span>Cantidad: </span><span v-if="producto.cantidad <= 5" class="text-danger">{{producto.cantidad}}</span><span v-else class="text-success">{{producto.cantidad}}</span><br>
                                <span>Precio: </span><span>{{producto.precio}}</span>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                {{producto.nombre}}
                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal" @click="guardarPedido(producto)"><i class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-sm" @click="formEdit(producto)"><i class="far fa-edit"></i></button>
                                <button class="btn btn-sm" @click="eliminar(producto, index)"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>   
                    </div>
                    <div class="full-width text-center" style="padding: 30px 0;" v-show="nombre != ''">
                        <div class="mdl-card mdl-shadow--2dp full-width product-card" v-for="(producto, index) in searchProducts" :key="index">
                            <div class="mdl-card__title">
                                <!-- <img v-bind:src="'public/storage/app/'+producto.img"> -->
                                <img width="200" height="180" :src="'/imgProductos/'+producto.img">
                                <!-- <img :src="require('/storage/app'+producto.img)" /> -->
                            </div>
                            <div class="mdl-card__supporting-text">
                                <span>Cantidad: </span><span v-if="producto.cantidad <= 5" class="text-danger">{{producto.cantidad}}</span><span v-else class="text-success">{{producto.cantidad}}</span><br>
                                <span>Precio: </span><span>{{producto.precio}}</span>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                {{producto.nombre}}
                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal" @click="guardarPedido(producto)"><i class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-sm" @click="formEdit(producto)"><i class="far fa-edit"></i></button>
                                <button class="btn btn-sm" @click="eliminar(producto, index)"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>   
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Pedido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Cantidades del Producto</label>
                                    <input type="number" class="form-control" id="recipient-name" v-model="pedido.cantidad">
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary"  @click="agregarPedido()">Agregar</button>
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
        props:['user', 'productos', 'categorias', 'proveedores'],
        data: function(){
            return{
                modoEditar:false, 
                imagenMiniatura: '',
                nombre: '',
                producto:{
                    id: '',
                    nombre: '',
                    precio: '',
                    cantidad: '',
                    id_categoria: '',
                    id_proveedor: '',
                    img: '',
                    imgAnterior: "",
                },
                pedido: {
                    nombre: "",
                    cantidad: "",
                    id_proveedor: "",
                }
            }
        },
        computed:{
            imagen(){
                return this.imagenMiniatura;
            },
            searchProducts: function () {
                return this.productos.filter((item) => item.nombre.toLowerCase().includes(this.nombre.toLowerCase()));
            }
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
            obtenerImagen(e){
                let file= e.target.files[0];

                this.producto.img= file;
                this.cargarImagen(file);
            },
            cargarImagen(file){
                let reader= new FileReader();

                reader.onload= (e) =>{
                    this.imagenMiniatura= e.target.result;
                }
                reader.readAsDataURL(file);
            },
            agregarPedido(){
                const params= {
                    nombre: this.pedido.nombre,
                    cantidad: this.pedido.cantidad,
                    id_proveedor: this.pedido.id_proveedor
                }

                axios.post('/admin/pedidos', params)
                .then(res =>{
                    alert('Pedido Cargado');

                });
            },
            agregar(){
                const params= {
                    nombre: this.producto.nombre,
                    precio: this.producto.precio,
                    cantidad: this.producto.cantidad,
                    id_categoria: this.producto.id_categoria.categoria.id,
                    id_proveedor: this.producto.id_proveedor.proveedor.id,
                    // img: this.producto.img
                }
                let formData = new FormData();
                formData.append("data",  JSON.stringify(params));
                formData.append("image", this.producto.img);

                axios.post('/admin/productos', formData, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(res =>{
                    alert('Producto Cargado');
                    this.producto.nombre= ' ';
                    this.producto.precio= ' ';
                    this.producto.cantidad= ' ';
                    this.producto.id_categoria= ' ';
                    this.producto.id_proveedor= ' ';
                    this.imagenMiniatura= ''; 
                });
            },
            guardarPedido(producto){
                this.pedido.nombre= producto.nombre;
                this.pedido.cantidad= producto.cantidad;
                this.pedido.id_proveedor= producto.id_proveedor;
            },
            editar(){
                let divAgregar= document.querySelector(".divAgregar");
                let divEditar= document.querySelector(".divEditar");
                let divProductos= document.querySelector(".divProductos");
                const params= {
                    nombre: this.producto.nombre,
                    precio: this.producto.precio,
                    cantidad: this.producto.cantidad,
                    id_categoria: this.producto.id_categoria.categoria.id,
                    id_proveedor: this.producto.id_proveedor.proveedor.id,
                    img: this.producto.imgAnterior
                }
                let formData = new FormData();
                formData.append("data",  JSON.stringify(params));
                formData.append("image", this.producto.img);

                axios.put(`/admin/productos/${this.producto.id}`, formData, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(res=>{
                    alert('Producto Cargado');
                    this.producto.nombre= '';
                    this.producto.precio= '';
                    this.producto.cantidad= '';
                    this.producto.id_categoria= '';
                    this.producto.id_proveedor= '';    
                    this.imagenMiniatura= ''; 
                });
                this.$emit('getProductos',);
                divProductos.classList.toggle("is-active");
                divEditar.classList.toggle("is-active");                
            },
            eliminar(producto, index){
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
                this.producto.id_proveedor= producto.id_proveedor;  
                this.producto.imgAnterior= producto.img;   
            }
        }
    }
</script>