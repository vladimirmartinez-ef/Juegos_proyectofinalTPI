<template>
  <v-row>
    <v-dialog
      transition="dialog-top-transition"
      max-width="1200"
      width="1200"
      v-model="dialog"
      persistent
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn color="green" v-bind="attrs" v-on="on">COMPRAR</v-btn>
      </template>
      <v-card class="purple">
        <v-card-title class="headline">
          llenar formulario : {{ gameClave.idclaves }} - {{ gameClave.clave }}-
          {{ gameClave.id }}
          <v-snackbar v-model="snackbar" color="green">
           <h3> {{ text }} </h3>

            <!-- <template v-slot:action="{ attrs }">
              <v-btn color="pink" text v-bind="attrs" @click="snackbar = false">
                Close
              </v-btn>
            </template> -->
          </v-snackbar>
        </v-card-title>

        <v-card-text>
          <v-form ref="formfactura" class="purple p-3" v-model="valid" lazy-validation>
            <v-col cols="auto">
              <v-row>
                <v-col>
                  <v-text-field
                    v-model="nombre"
                    :rules="nombreRule"
                    label="Nombre"
                    required
                  ></v-text-field>
                </v-col>
                <v-col>
                  <v-text-field
                    v-model="apellido"
                    :rules="apellidoRule"
                    label="Apellido"
                    required
                  ></v-text-field>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                  <v-text-field
                    v-model="email"
                    :rules="emailRule"
                    label="E-mail"
                    required
                  ></v-text-field>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                  <v-text-field
                    v-model="tarjeta"
                    :rules="tarjetaRule"
                    label="Numero Tarjeta"
                    required
                  ></v-text-field>
                </v-col>
                <v-col>
                  <v-text-field
                    v-model="cvv"
                    :rules="cvvRule"
                    label="CVV"
                    required
                  ></v-text-field>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                  <v-select
                    v-model="selectm"
                    :items="mes"
                    label="Mes"
                    required
                  ></v-select>
                </v-col>
                <v-col>
                  <v-select
                    v-model="selecta"
                    :items="años"
                    label="Año"
                    required
                  ></v-select>
                </v-col>
              </v-row>
            </v-col>
          </v-form>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn class="mr-4" @click="submit" :disabled="!valid"> Hecho </v-btn>
          <v-btn @click="clear"> cancelar </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: {
    gameCompra: Object,
    gameClave: Object,
  },
  data() {
    return {
      valid: true,
      factura: [],
      dialog: false,
      nombre: "",
      apellido: "",
      tarjeta: "",
      cvv: "",
      email: "",
      nombreRule: [
        (v) => !!v || "Campo Requerido",
        (v) =>
          /^[A-Z]{1,1}[a-z]{0,100}$/.test(v) ||
          "La primera letra debe ser Mayuscula y las demas minusculas",
      ],
      apellidoRule: [
        (v) => !!v || "Campo Requerido",
        (v) =>
          /^[A-Z]{1,1}[a-z]{0,100}$/.test(v) ||
          "La primera letra debe ser Mayuscula y las demas minusculas",
      ],
      emailRule: [
        (v) => !!v || "Campo Requerido",
        //   [a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*
        (v) =>
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
            v
          ) || "Email no valido, requiere de @ ",
      ],
      tarjetaRule: [
        (v) => !!v || "Campo Requerido",
        (v) =>
          /^[0-9]{16,16}$/.test(v) || "La tarjeta corresponde de 16 digitos",
      ],
      cvvRule: [
        (v) => !!v || "Campo Requerido",
        (v) => /^[0-9]{3,3}$/.test(v) || "El cvv corresponde de 3 digitos",
      ],
      selectm: null,
      selecta: null,
      mes: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
      años: ["2022", "2024", "2025", "2026", "2027", "2028"],
      snackbar: false,
      newFact: {},
      text: `Compra Realizada, la factura se envio a su correo!!    (Espera mientras la pagina se recarga sola)`,
    };
  },
  methods: {
    submit() {
      if (this.$refs.formfactura.validate()) {
          let this2 = this;
          const facturaNueva = {
            idjuegos: this.gameClave.idjuegos,
            idclaves: this.gameClave.idclaves,
            nombre: this.nombre,
            apellido: this.apellido,
            email: this.email,
            pagocancelado: this.gameCompra.precio,
          };
          axios.post("/factura", facturaNueva).then((res) => {
            console.log(res.data);
            //no necesito traer factura...si...
            this2.newFact = res.data;
            this.clavejuego();
          });

      }

    },
    clavejuego() {
      const ids = {
        id: this.gameClave.id,
        idclaves: this.gameClave.idclaves,
        estadoclave: false,
      };
      axios.put(`/juegoclave/${this.gameClave.id}`, ids).then((resp) => {
        console.log("se hizo put...");
        this.clavejuegoget();
      });
    },
    clavejuegoget() {
      let array = [];
      axios.get("/juegoclave").then((respu) => {
        console.log(respu.data);
        let jucla = respu.data;
        for (let index = 0; index < jucla.length; index++) {
          if (jucla[index].idjuegos == this.gameClave.idjuegos) {
            array.push(jucla[index]);
          }
        }
        if (array.length > 0) {
          console.log("todo bien");
          this.sendgrid();
        } else {
          this.juegosput();
        }
      });
    },
    juegosput() {
      const newgame = {
        nombrejuego: this.gameCompra.nombrejuego,
        descripcion: this.gameCompra.descripcion,
        requerimientos: this.gameCompra.requerimientos,
        sistema: this.gameCompra.sistema,
        idclasificacion: this.gameCompra.idclasificacion,
        estado: "nodisponible",
        proveedor: this.gameCompra.proveedor,
        precio: this.gameCompra.precio,
        image: this.gameCompra.image,
      };

      axios.put(`/juego/${this.gameCompra.id}`, newgame).then((resp) => {
        console.log("se hizo put...");
        this.sendgrid();
      });
    },
    sendgrid() {
        const newFactura = {
            idfactura: this.newFact.id,
            nombrejuego: this.gameCompra.nombrejuego,
            nombreclave: this.gameClave.clave,
            nombre: this.newFact.nombre,
            apellido: this.newFact.apellido,
            email: this.newFact.email,
            pagocancelado: this.newFact.pagocancelado,
        }

        axios.post("/sendemail", newFactura).then((res) => {
            this.$refs.formfactura.reset();
            this.snackbar = true;
              setTimeout(this.recargar,6000);
      });

    },
    clear() {
        this.$refs.formfactura.reset();
      this.dialog = false;
    },
    recargar(){

      this.dialog = false;
      location.reload();

    },
  },
};
</script>
