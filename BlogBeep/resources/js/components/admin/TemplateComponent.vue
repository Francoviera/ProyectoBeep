<template>
    <div>
        <!-- navLateral -->
        <section class="full-width navLateral">
            <div class="full-width navLateral-bg btn-menu"></div>
            <div class="full-width navLateral-body">
                <navlateral-component 
                :user='user'  
                @pagProductos="pagProductos" 
                @pagCategorias="pagCategorias"
                @pagVentas="pagVentas"
                @pagUsuarios="pagUsuarios"
                @pagProveedores="pagProveedores"> 
                </navlateral-component>
            </div>
        </section>
        <section class="full-width pageContent">
            <navhorizontal-component :user='user' > 
            </navhorizontal-component>


            <productos-component  
            :productos='productos' 
            :categorias='categorias'
            @getProductos="getProductos"
            @getCategorias="getCategorias"
            @getCategoria="getCategoria" 
             v-show="url == '/admin/productos'  || url == 'productos'"> 
            </productos-component>

            <categorias-component 
            :categorias='categorias' 
            @getCategorias="getCategorias"
            v-show="url == '/admin/categorias' || url == 'categorias'"> 
            </categorias-component>

            <ventas-component  v-show="url == '/admin/ventas' || url == 'ventas'"> 
            </ventas-component>

            <usuarios-component 
            :usuarios='usuarios'
            @getUsuarios="getUsuarios"
            v-show="url == '/admin/usuarios' || url == 'usuarios'">       
            </usuarios-component>

            <proveedores-component v-show="url == '/admin/proveedores' || url == 'proveedores'">       
            </proveedores-component>

        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Se Cargo')
        },
        data: function(){
            return{
                userAdmin: false,
                modoEditar: false,
                productos: [],
                producto:{
                    nombre: '',
                    precio: '',
                    cantidad: '',
                    id_categoria: ''
                },
                categorias: [],
                categoria:{
                    nombre: '',
                    precio: '',
                    cantidad: '',
                    id_categoria: ''
                },
                usuarios: [],
                user:{     
                },
                url: "",
            }
        },
        created(){
            axios.get('/usuario/logged').then(response=>{
                this.user = response.data;
            });
            axios.get('/admin/categorias').then(response=>{
                this.categorias = response.data;
            });
            this.url = window.location.pathname;
        },
        methods:{
            pagCategorias(){
                history.pushState(null, null, "http://127.0.0.1:8000/admin/categorias");
                this.url= 'categorias';
            },
            pagProductos(){
                history.pushState(null, null, "http://127.0.0.1:8000/admin/productos");
                this.url= 'productos';
            },
            pagVentas(){
                history.pushState(null, null, "http://127.0.0.1:8000/admin/ventas");
                this.url= 'ventas';
            },
            pagUsuarios(){
                history.pushState(null, null, "http://127.0.0.1:8000/admin/usuarios");
                this.url= 'usuarios';

            },
            pagProveedores(){
                history.pushState(null, null, "http://127.0.0.1:8000/admin/proveedores");
                this.url= 'proveedores';
            },
           getProductos(){
                axios.get('/admin/productos').then(response=>{
                this.productos = response.data;
                });
                history.pushState(null, null, "http://127.0.0.1:8000/admin/productos");
                this.url= 'productos';
            },
            getCategorias(){
                axios.get('/admin/categorias').then(response=>{
                this.categorias = response.data;
                });
                
                
            },
            getCategoria(id){
                axios.get(`/admin/categorias/${id}`).then(response=>{
                this.productos = response.data;
                });
            },
            getUsuarios(){
                axios.get(`/admin/usuarios`).then(response=>{
                this.usuarios = response.data;
                });
            }
        }
    }
</script>