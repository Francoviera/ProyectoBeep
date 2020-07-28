<template>
    <div>
        <div class="mdl-tabs__tab-bar">
            <a href="#tabListClient" class="mdl-tabs__tab">PEDIDOS</a>
        </div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>cantidad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(pedido, index) in pedidos" :key="index">
                            <td>{{pedido.nombre}}</td>
                            <td>{{pedido.cantidad}}</td>
                            <td>
                                <button class="btn btn-sm" @click="eliminar(pedido.id)"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
			</div>
            <form>
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="mdl-textfield mdl-js-textfield">
                        <span>Elejir Proveedor</span>
                        <select v-model="proveedor" class="mdl-textfield__input">
                            <option value="" disabled="" selected>Value 2</option>
                            <option v-for="(proveedor, index) in proveedores" :key="index" v-bind:value="{ proveedor}">{{proveedor.name}}</option> 
                        </select>
                    </div>
                    <button type="button" @click="generarMensaje()">Generar MSG</button>
                </div>
                <a :href="'https://api.whatsapp.com/send?phone='+numero+'&text='+ msg" target="_blank" ><button class="btn btn-success" type="button" @click="eliminarPedidos(this.id_proveedor)">Enviar</button></a>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        props:['proveedores', 'pedidos'],
        data: function(){
            return{
                msg: " ",
                proveedor: 0,
                numero: 0,
                pedido: {
                    id: 0,
                    cantidad: 0,
                    id_proveedor: 0,
                    nombre: "",
                },
                pedidoEdit: {
                    nombre: "",
                    cantidad: "",
                    id_proveedor: "",
                }
                
            }
        },
        methods:{
            generarMensaje(){
                if(this.proveedor === 0){
                    alert("porfavor elija un provedor");
                }else{
                    axios.get(`/admin/pedidos`).then(response=>{
                        for (let pedido of response.data) {
                            if(pedido.id_proveedor == this.proveedor.proveedor.id){
                                this.msg+= pedido.nombre +"%20"+ pedido.cantidad +"%0A" ;
                            }
                        }
                        if(this.msg === " "){
                        alert("No se Encontraron Pedidos con el proveedor elejido");
                        }else{
                            alert("Mensaje listo para enviar");
                        }
                    });     
                    this.numero= this.proveedor.proveedor.telefono;
                }
                this.msg= " ";
            },
            eliminar(id){
                axios.delete(`/admin/pedido/${id}`)
                .then(()=>{
                    this.$emit('getPedidos');
                });               
            },
            eliminarPedidos(id){
                axios.delete(`/admin/pedidos/${id}`)
                .then(()=>{
                    this.$emit('getPedidos');
                });               
            },
            formEdit(pedido){
                this.pedido.id= pedido.id; 
                this.pedido.cantidad= pedido.cantidad;
                this.pedido.nombre= pedido.nombre;
                this.pedido.id_proveedor= pedido.id_proveedor;  
            },
            editarPedido(){
                const params= {
                    nombre: this.pedido.nombre,
                    cantdad: this.pedido.cantidad,
                    id_proveedor: this.pedido.id_proveedor,
                }
                axios.put(`/admin/pedidos/${this.pedido.id}`, params)
                .then(()=>{
                    this.$emit('getPedidos');
                }); 
            }
        }
    }
</script>