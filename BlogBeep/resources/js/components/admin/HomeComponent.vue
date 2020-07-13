<template>
    <div>
        <section class="full-width text-center" style="padding: 40px 0;">
            <h3 class="text-center tittles">TITULOS</h3>
            <!-- Tiles -->
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{admins}}<br>
                        <small>Administradores</small>
                    </span>
                </div>
                <i class="zmdi zmdi-account tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{users}}<br>
                        <small>Clientes</small>
                    </span>
                </div>
                <i class="zmdi zmdi-accounts tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{proveedores.length}}<br>
                        <small>Provedores</small>
                    </span>
                </div>
                <i class="zmdi zmdi-truck tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{categorias.length}}<br>
                        <small>Categorias</small>
                    </span>
                </div>
                <i class="zmdi zmdi-label tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{productos.length}}<br>
                        <small>Productos</small>
                    </span>
                </div>
                <i class="zmdi zmdi-washing-machine tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        {{ventas.length}}<br>
                        <small>Ventas</small>
                    </span>
                </div>
                <i class="zmdi zmdi-shopping-cart tile-icon"></i>
            </article>
        </section>
        <section class="full-width" style="margin: 30px 0;">
            <h3 class="text-center tittles">RESPONSIVE TIMELINE</h3>
            <!-- TimeLine -->
            <div id="timeline-c" class="timeline-c">
                <div class="timeline-c-box">
                    <div class="timeline-c-box-icon bg-info">
                        <i class="zmdi zmdi-twitter"></i>
                    </div>
                    <div class="timeline-c-box-content">
                        <h4 class="text-center text-condensedLight">Tittle timeline</h4>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nobis rerum iure nostrum dolor. Quo totam possimus, ex, sapiente rerum vel maxime fugiat, ipsam blanditiis veniam, suscipit labore excepturi veritatis.
                        </p>
                        <span class="timeline-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>05-04-2016</span>
                    </div>
                </div>
                <div class="timeline-c-box">
                    <div class="timeline-c-box-icon bg-success">
                        <i class="zmdi zmdi-whatsapp"></i>
                    </div>
                    <div class="timeline-c-box-content">
                        <h4 class="text-center text-condensedLight">Tittle timeline</h4>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nobis rerum iure nostrum dolor. Quo totam possimus, ex, sapiente rerum vel maxime fugiat, ipsam blanditiis veniam, suscipit labore excepturi veritatis.
                        </p>
                        <span class="timeline-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>06-04-2016</span>
                    </div>
                </div>
                <div class="timeline-c-box">
                    <div class="timeline-c-box-icon bg-primary">
                        <i class="zmdi zmdi-facebook"></i>
                    </div>
                    <div class="timeline-c-box-content">
                        <h4 class="text-center text-condensedLight">Tittle timeline</h4>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nobis rerum iure nostrum dolor. Quo totam possimus, ex, sapiente rerum vel maxime fugiat, ipsam blanditiis veniam, suscipit labore excepturi veritatis.
                        </p>
                        <span class="timeline-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>07-04-2016</span>
                    </div>
                </div>
                <div class="timeline-c-box">
                    <div class="timeline-c-box-icon bg-danger">
                        <i class="zmdi zmdi-youtube"></i>
                    </div>
                    <div class="timeline-c-box-content">
                        <h4 class="text-center text-condensedLight">Tittle timeline</h4>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nobis rerum iure nostrum dolor. Quo totam possimus, ex, sapiente rerum vel maxime fugiat, ipsam blanditiis veniam, suscipit labore excepturi veritatis.
                        </p>
                        <span class="timeline-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>08-04-2016</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
       props:['productos', 'categorias', 'ventas', 'proveedores'],
       data: function(){
            return{
               admins: 0,
               users: 0
            }
        },
        mounted(){
            this.$emit('pagHome');
            axios.get("/admin/admins")
            .then(res=>{
                this.admins= res.data.length;
            });
            axios.get("/admin/users")
            .then(res=>{
                this.users= res.data.length;
            });
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