<template>
    <div>
        <!-- navLateral -->
        <section class="full-width navLateral">
            <div class="full-width navLateral-bg btn-menu"></div>
            <div class="full-width navLateral-body">
                <navlateral-component :user='user' @getProductos="getProductos"> 
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
            v-if="url == '/admin/productos'  || url == 'productos'"> 
            </productos-component>

            <categorias-component v-if="url == '/admin/categorias' || url == 'categorias'"> 
            </categorias-component>

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
            console.log(this.url);
        },
        methods:{
           getProductos(){
                axios.get('/admin/productos').then(response=>{
                this.productos = response.data;
                console.log(response);
                });
                // location.href = "http://127.0.0.1:8000/admin/productos";
                history.pushState(null, null, "http://127.0.0.1:8000/admin/productos");
                this.url= 'productos';
                console.log(this.url);
            },
            getCategorias(){
                axios.get('/admin/categorias').then(response=>{
                this.categorias = response.data;
                console.log(response);
                });
                history.pushState(null, null, "http://127.0.0.1:8000/admin/categorias");
                this.url= 'categorias';
                
            },
            getCategoria(id){
                axios.get(`/admin/categorias/${id}`).then(response=>{
                this.productos = response.data;
                console.log(response);
                });
            }
        }
    }
</script>