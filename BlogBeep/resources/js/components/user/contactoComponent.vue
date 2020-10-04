<template>
    <div class="col-lg-8">
        <div class="contact__form">
            <div class="section-title">
                <h2>Mandar Consulta</h2>

            </div>
            <p>Estaremos en contacto lo antes posible con vos para poder responder a tu consulta</p>
            <form @submit.prevent="enviarMensaje(reparacion)">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Consulta de</label>
                    <select v-model="consulta" class="form-control" id="exampleFormControlSelect1">
                        <option value="542314535494">Celulares</option>
                        <option value="542314557289">Computadoras</option>
                    </select>
                </div>
                <textarea placeholder="Consulta" v-model="mensaje"></textarea>
                   <a :href="'https://api.whatsapp.com/send?phone='+consulta+'&text='+ mensaje" target="_blank" v-if="consulta != '' && mensaje != ''"><button class="btn btn-success" type="button">Enviar</button></a>
                   <button class="btn btn-success" type="button" v-else>Enviar</button>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        data: function(){
            return{
                mensaje: '',
                consulta: '',
            }
        },
        mounted(){
            axios.get(`http://192.168.0.30`)
            .then(response=>{
                console.log(response);
            });
        },
    }
</script>