<template>
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Productos</h2>
                        <title>Productos</title>
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="section-title ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Producto" aria-label="Username" aria-describedby="basic-addon1" v-model="nombre">
                        </div>
                    </div>
                </div>
            </div>   
            <div class="row" v-if="nombre === ''">            
                <div class="col-lg-4 col-md-6 col-sm-6" v-for="(producto, index) in inventario" :key="index">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img width="200" height="230" :src="'/imgProductos/'+producto.img">
                        </div>
                        <div class="discography__item__text">
                            <span>${{producto.precio}}</span>
                            <h4>{{producto.nombre}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination__links">
                        <a  @click.prevent="changePage(pagination.current_page - 1)" v-if="pagination.current_page > 1" >Atras</a>

                        <a v-for="(page, index) in pageNumber" :key="index" v-bind:class="[page == isActive ? 'bg-primary' : '' ]" @click.prevent="changePage(page)">
                            {{page}}
                        </a>

                        <a @click.prevent="changePage(pagination.current_page + 1)" v-if="pagination.current_page < pagination.last_page">Siguiente</a>
                    </div>
                </div>
            </div>
            <div class="row" v-else>    
                <div class="col-lg-4 col-md-6 col-sm-6" v-for="(producto, index) in searchProducts" :key="index">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img width="200" height="230" :src="'/imgProductos/'+producto.img">
                        </div>
                        <div class="discography__item__text">
                            <span>${{producto.precio}}</span>
                            <h4>{{producto.nombre}}</h4>
                        </div>
                    </div>
                </div>                               
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data: function(){
            return{
                inventario: [],   
                productos: [],  
                pagination:{
                    'total': 0,
                    'current_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0,
                },
                filtro: '',
                nombre: '',
            }
        },
        computed:{
            isActive:function () {
                return this.pagination.current_page;
            },
            pageNumber:function () {
                let from= this.pagination.current_page - 2;
                if(from < 1){
                    from= 1;
                }
                let to= from + (2*2);
                if(to >= this.pagination.last_page){
                    to= this.pagination.last_page;
                }
                let pagesArray= [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            },
            searchProducts: function () {
                return this.productos.filter((item) => item.nombre.includes(this.nombre));
            }
        },
        mounted(){
            this.getProductos();
        },
        methods:{
            getProductos(){
                axios.get('/inventario').then(response=>{
                this.inventario = response.data.data;
                this.pagination.current_page= response.data.current_page;
                this.pagination.from= response.data.from;
                this.pagination.to= response.data.to;
                this.pagination.last_page= response.data.last_page;
                this.pagination.total= response.data.total;
                });
                axios.get('/allProductos').then(response=>{
                this.productos= response.data;
                });
            },
            changePage(page){
                this.pagination.current_page= page;
                this.getPage(page);
            },
            getPage(page){
                let urlInventario= 'inventario?page='+ page;
                axios.get(urlInventario).then(response=>{
                this.inventario = response.data.data;
                this.pagination.current_page= response.data.current_page;
                this.pagination.from= response.data.from;
                this.pagination.to= response.data.to;
                this.pagination.last_page= response.data.last_page;
                this.pagination.total= response.data.total;
                console.log(this.pagination);
                });
            },
        }
    }
</script>