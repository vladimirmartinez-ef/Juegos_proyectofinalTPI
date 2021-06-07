<template>
  <v-app>
    <v-navigation-drawer app clipped>
      <v-list dense>
        <v-list-item link to="/">
          <v-list-item-action>
            <v-icon>mdi-view-dashboard</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>TODO</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link to="/juegocarrera">
          <v-list-item-action>
            <v-icon>mdi-car</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>CARRERAS</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link to="/juegoestrategia">
          <v-list-item-action>
            <v-icon>mdi-chess-queen</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>ESTRATEGIA</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link to="/juegorpg">
          <v-list-item-action>
            <v-icon>mdi-sword</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>RPG</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link to="/juegoaventura">
          <v-list-item-action>
            <v-icon>mdi-sword</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>AVENTURA</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-app-bar app clipped-left>
      <v-toolbar-title>
        <v-icon color="blue" size="100px">mdi-gamepad-variant</v-icon>Arctic
        Game Universe</v-toolbar-title
      >
    </v-app-bar>
    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
    <v-footer>
      <v-row>
        <v-col cols="3"> </v-col>
        <v-col cols="3">
          <v-card style="height: 375px;">
            <v-toolbar color="teal" dark class="text-center">
              <v-toolbar-title>Misión y Visión</v-toolbar-title>
            </v-toolbar>
            <v-list>
              <template>
                <v-list-item>
                  <v-list-item-content>
                    <v-list-item-title
                      ><v-icon>mdi-bag-personal</v-icon>
                      Misión</v-list-item-title
                    >
                    <v-list-item-subtitle
                      >Establecer a nuestra comunidad y pais una <br />
                      forma de entretenimiento, diversión y reflax<br />
                      de manera ágil y dinámica.</v-list-item-subtitle
                    >
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>
                    <v-list-item-title
                      ><v-icon>mdi-eye-outline</v-icon>
                      Visión</v-list-item-title
                    >
                    <v-list-item-subtitle
                      >Deseamos ser una empresa reconocidad<br />
                       por su calidad y variedad en entretenimiento<br />
                      y mejorar la forma de conseguir nuestros <br>
                      juegos.</v-list-item-subtitle
                    >
                  </v-list-item-content>
                </v-list-item>
              </template>
            </v-list>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card style="height: 375px;">
            <v-toolbar color="teal" dark class="text-center">
              <v-toolbar-title>Información</v-toolbar-title>
            </v-toolbar>
            <v-list>
              <template>
                <v-list-item>
                  <v-list-item-content>
                    <v-list-item-title
                      ><v-icon>mdi-information-outline</v-icon>
                      Help</v-list-item-title
                    >
                    <v-list-item-subtitle
                      >Para poder obtener un juego necesitas <br />
                      seleccionar el que deseas e ir a detalles <br />
                      verifica si es compatible con tu pc <br />
                      dale click a comprar, llena el formulario <br />
                      y hecho.</v-list-item-subtitle
                    >
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>
                    <v-list-item-title
                      ><v-icon>mdi-alert</v-icon> Indicaciones
                      importantes</v-list-item-title
                    >
                    <v-list-item-subtitle
                      >Es importante que al llenar el campo email <br />
                      en el formulario escribas una dirección de<br />
                       correo valida y de la que recuerdes tu <br />
                      contraseña dado que al mismo se te<br />
                      enviará la factura junto con la clave <br>
                      que activará tu juego.</v-list-item-subtitle
                    >
                  </v-list-item-content>
                </v-list-item>
              </template>
            </v-list>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card style="height: 375px;">
            <v-toolbar color="teal" dark class="text-center">
              <v-toolbar-title>Contactanos</v-toolbar-title>
            </v-toolbar>
            <v-list>
              <template>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-facebook</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title
                      >Arctic Games Universe Official</v-list-item-title
                    >
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-instagram</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>arcticgu_official</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-twitter</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title
                      >arctic_games_universe_offi</v-list-item-title
                    >
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-whatsapp</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>(503) 4567-7880</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </template>
            </v-list>
          </v-card>
        </v-col>
      </v-row>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.$vuetify.theme.dark = true;
  },
};
</script>
