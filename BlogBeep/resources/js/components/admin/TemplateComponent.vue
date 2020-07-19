<template>
        <!-- let capcharesultado = document.querySelector(".capcha_resultado").innerHTML = "<h3>Sos Humano ✅</h3>";
    } else {
        let capcharesultado = document.querySelector(".capcha_resultado").innerHTML = "<h3>❗Vuelve a intentarlo❗</h3>"; -->
    <div>
        <!-- navLateral -->
        <section class="full-width navLateral">
            <div class="full-width navLateral-bg btn-menu"></div>
            <div class="full-width navLateral-body">
                <navlateral-component 
                    :user='user'  
                    @pagHome="pagHome"
                    @pagProductos="pagProductos" 
                    @pagCategorias="pagCategorias"
                    @pagVentas="pagVentas"
                    @pagPedidos="pagPedidos"
                    @pagUsuarios="pagUsuarios"
                    @pagProveedores="pagProveedores"> 
                </navlateral-component>
            </div>
        </section>
        <section class="full-width pageContent">
            <navhorizontal-component 
                :user='user' > 
            </navhorizontal-component>

            <home-component 
                :productos='productos' 
                :categorias='categorias'
                :proveedores='proveedores'
                :ventas='ventas'
                @pagHome="pagHome"
                @pagProductos="pagProductos" 
                @pagCategorias="pagCategorias"
                @pagVentas="pagVentas"
                @pagPedidos="pagPedidos"
                @pagUsuarios="pagUsuarios"
                @pagProveedores="pagProveedores"
                v-show="url == '/admin'  || url == 'home' || url == '/admin/home'">
            </home-component>

            <productos-component  
                :productos='productos' 
                :categorias='categorias'
                :proveedores='proveedores'
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

            <ventas-component  
                v-show="url == '/admin/ventas' || url == 'ventas'"> 
            </ventas-component>

            <usuarios-component 
                :usuarios='usuarios'
                @getUsuarios="getUsuarios"
                v-show="url == '/admin/usuarios' || url == 'usuarios'">       
            </usuarios-component>

            <proveedores-component 
                :proveedores='proveedores'
                @getProveedores="getProveedores"
                v-show="url == '/admin/proveedores' || url == 'proveedores'">       
            </proveedores-component>

            <pedidos-component 
                :proveedores='proveedores'
                :pedidos='pedidos'
                @getPedidos="getPedidos"
                v-show="url == '/admin/pedidos' || url == 'pedidos'">       
            </pedidos-component>

        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.url = window.location.pathname;
            history.pushState(null, null, "http://127.0.0.1:8000/admin");
        },
        data: function(){
            return{
                proveedores: [],
                pedidos: [],
                productos: [],
                categorias: [],
                usuarios: [],
                ventas: [],
                user:{     
                },
                url: "",
            }
        },
        created(){
            this.url = window.location.pathname;
            axios.get(`/usuario/logged`).then(response=>{
                this.user = response.data;
            });
        },
        methods:{
            pagHome(){
                this.url= 'home';
                this.getProductos();
                this.getCategorias();
                this.getVentas();
                this.getProveedores();
            },
            pagCategorias(){
                this.url= 'categorias';
            },
            pagProductos(){
                this.getProductos();
                this.url= 'productos';
            },
            pagVentas(){
                this.url= 'ventas';
            },
            pagUsuarios(){
                this.url= 'usuarios';

            },
            pagProveedores(){
                this.url= 'proveedores';
                this.getProveedores();
            },
            pagPedidos(){
                this.url= 'pedidos';
                this.getProveedores();
                this.getPedidos();
            },
            getProductos(){
                axios.get('/admin/productos').then(response=>{
                this.productos = response.data;
                });
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
            },
            getProveedores(){
                axios.get(`/admin/proveedores`).then(response=>{
                this.proveedores = response.data;
                });
            },
            getVentas(){
                axios.get(`/admin/compras`).then(response=>{
                this.ventas = response.data;
                });
            },
            getPedidos(){
                axios.get(`/admin/pedidos`).then(response=>{
                this.pedidos = response.data;
            });
            },
        }
    }
</script>