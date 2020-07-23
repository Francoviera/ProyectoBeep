<template>
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Productos</h2>
                        <h1>Productos</h1>
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="section-title ">
                        <i class="fas fa-search"></i><input v-model="filtro" >
                    </div>
                </div>
            </div>   
            <div class="row">              
                <div class="col-lg-4 col-md-6 col-sm-6" v-for="(producto, index) in inventario" :key="index">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img width="200" height="230" :src="'/imgProductos/'+producto.img">
                        </div>
                        <div class="discography__item__text">
                            <span>${{producto.precio}}</span>
                            <h4>{{producto.nombre}}</h4>
                            <!-- <a href="#"><img src="img/discography/link-1.jpg" alt=""></a>
                            <a href="#"><img src="img/discography/link-2.jpg" alt=""></a> -->
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
        </div>
    </section>
</template>
<script>
    export default {
        data: function(){
            return{
                inventario: [],     
                pagination:{
                    'total': 0,
                    'current_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0,
                },
                filtro: '',
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
            // computedList: function () {
            //     var vm = this
            //     return this.productos.filter(function (item) {
            //         return item.nombre.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1
            //     })
            // }
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
                console.log(this.pagination);
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