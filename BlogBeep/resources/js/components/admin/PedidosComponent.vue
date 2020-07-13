<template>
    <div>
        <div class="mdl-tabs__tab-bar">
            <a href="#tabListClient" class="mdl-tabs__tab">PEDIDOS</a>
        </div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<!-- <div class="table-responsive"> -->
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th>Producto</th>
								<th>cantidad</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="(pedido, index) in pedidos" :key="index">
								<td>{{pedido.nombre}}</td>
								<td>{{pedido.cantidad}}</td>
								<!-- <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td> -->
                                <td></td>
							</tr>
						</tbody>
					</table>
                <!-- </div> -->
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
                <a :href="'https://api.whatsapp.com/send?phone='+numero+'&text='+ msg" target="_blank" ><button class="btn btn-success" type="button" @click="eliminarPedidos()">Enviar</button></a>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        props:['proveedores'],
        data: function(){
            return{
                pedidos:[], 
                msg: " ",
                proveedor: 0,
                numero: 0,
            }
        },
        mounted(){
            axios.get(`/admin/pedidos`).then(response=>{
                this.pedidos = response.data;
                // for (let pedido of response.data) {
                //     this.msg+= pedido.nombre +"%20"+ pedido.cantidad +"%0A" ;
                // }
            });
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
                // for (let pedido of this.pedidos) {
                //     if(pedido == this.proveedor.id){
                //         console.log(pedido);
                //         this.msg+= pedido.nombre +"%20"+ pedido.cantidad +"%0A" ;
                //     }
                // }
            },
            eliminarPedidos(){
                axios.delete(`/admin/pedidos/${this.proveedor.proveedor.id}`)
                .then(()=>{
                    axios.get(`/admin/pedidos`).then(response=>{
                    this.pedidos = response.data;
                    });
                });               
            }
        }
    }
</script>