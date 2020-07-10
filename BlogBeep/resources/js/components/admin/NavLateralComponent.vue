<template>
    <div>
        <div class="full-width navLateral-body-logo text-center tittles">
            <i class="zmdi zmdi-close btn-menu"></i> Inventario 
        </div>
        <figure class="full-width navLateral-body-tittle-menu">
            <div>
                <img v-bind:src="'img/avatar-male.png'">
            </div>
            <figcaption>
                <span>
                    {{user.name}}<br>
                    <small>Admin</small>
                </span>
            </figcaption>
        </figure>
        <nav class="full-width">
            <ul class="full-width list-unstyle menu-principal">
                <li class="full-width">
                    <a class="full-width">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-view-dashboard"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            HOME
                        </div>
                    </a>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-case"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            ADMINISTRACION
                        </div>
                        <span class="zmdi zmdi-chevron-left"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-balance"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    COMPANIA
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-truck"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    PROVEDORES
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-card"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    PAGOS
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-label"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    CATEGORIAS
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-face"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            USUARIOS
                        </div>
                        <span class="zmdi zmdi-chevron-left"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    ADMINISTRACION
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-accounts"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    CLIENTES
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width" @click="getproductos()">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-washing-machine"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            PRODUCTOS
                        </div>
                    </a>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            VENTAS
                        </div>
                    </a>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-store"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            INVENTARIO
                        </div>
                    </a>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-wrench"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            AJUSTES
                        </div>
                        <span class="zmdi zmdi-chevron-left"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-widgets"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    OPCIONES
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-widgets"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    OPCIONES
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        props:['user'],
        data: function(){
            return{
                
               
            }
        },
        created(){
        },
        methods:{
            getproductos(){
                this.$emit('getProductos');
            }
        }
    }
</script>
