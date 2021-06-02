<template>
  <v-row justify="center">
    <v-dialog
      v-model="dialog"
      fullscreen
      hide-overlay
      transition="dialog-bottom-transition"
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn color="green" dark v-bind="attrs" v-on="on" @click="traer(gameUniverse.id)"> DETALLES </v-btn>
      </template>
      <v-card>
        <v-toolbar dark color="primary">
          <v-btn icon dark @click="dialog = false">
            <v-icon>mdi-close</v-icon>
          </v-btn>
          <v-toolbar-title>{{ gameUniverse.nombrejuego }}</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items>
            <v-btn dark text @click="dialog = false"> Salir </v-btn>
          </v-toolbar-items>
        </v-toolbar>
        <v-row class="pa-3">
          <v-col md="6">
            <v-img :src="gameUniverse.image" max-width="500" max-height="300" />
          </v-col>
          <v-col md="6">
            <div>
              <h3 class="purple--text" style="text-shadow: 1px 1px 2px white">
                Descripción:
              </h3>
              <h4>{{ gameUniverse.descripcion }}</h4>
            </div>
            <v-divider class="green"></v-divider>
            <h1>${{ gameUniverse.precio }}</h1>
            <br />
            <div class="pa-3" justify-center>
              <compra :gameCompra="gameUniverse" :gameClave="juegos" />
            </div>
          </v-col>
        </v-row>
        <v-divider></v-divider>
        <v-row>
          <v-col md="6">
            <h4 class="purple--text" style="text-shadow: 1px 1px 2px white">
              Clasificación:
            </h4>
            <p>{{ gameUniverse.clasificacion }}</p>
            <hr class="green" />
            <h4 class="purple--text" style="text-shadow: 1px 1px 2px white">
              Requerimientos:
            </h4>
            <p>{{ gameUniverse.requerimientos }}</p>
          </v-col>
          <v-col md="6">
            <h4 class="purple--text" style="text-shadow: 1px 1px 2px white">
              Proveedor:
            </h4>
            <p>{{ gameUniverse.proveedor }}</p>
            <hr class="green" />
            <h4 class="purple--text" style="text-shadow: 1px 1px 2px white">
              Sistema:
            </h4>
            <p>{{ gameUniverse.sistema }}</p>
            <p>clave: {{juegos.idclaves}}</p>
            <p>clave: {{juegos.clave}}</p>
          </v-col>
        </v-row>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: {
    gameUniverse: Object,
  },
  data() {
    return {
      dialog: false,
      juegos:[],
      ver: false
    };
  },
  methods: {
      traer(id){
          var thisv= this
          axios.get(`/juegoclave`).then((res)=>{
              console.log('entro............');
                var hola = res.data;
                for (let index = 0; index < hola.length; index++) {
                    if (hola[index].idjuegos == id) {
                        this.juegos = hola[index]
                        console.log(this.juegos)
                        break
                    }

                }
          })
      },
  },
};
</script>
