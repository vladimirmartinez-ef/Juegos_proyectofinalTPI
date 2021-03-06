<template>
    <div>
        <h1>RPG</h1>

        <v-data-iterator
            class="mx-3"
            :items="items"
            :items-per-page.sync="itemsPerPage"
            :page="page"
            :search="search"
            :sort-by="sortBy.toLowerCase()"
            :sort-desc="sortDesc"
            hide-default-footer
        >
            <template v-slot:header>
                <v-toolbar dark color="indigo darken-3" class="mb-1">
                    <v-text-field
                        v-model="search"
                        clearable
                        flat
                        solo-inverted
                        hide-details
                        prepend-inner-icon="mdi-magnify"
                        label="Search"
                    ></v-text-field>
                    <template v-if="$vuetify.breakpoint.mdAndUp">
                        <v-spacer></v-spacer>
                        <v-select
                            v-model="sortBy"
                            flat
                            solo-inverted
                            hide-details
                            :items="keys"
                            prepend-inner-icon="mdi-magnify"
                            label="Sort by"
                        ></v-select>
                        <v-spacer></v-spacer>
                        <v-btn-toggle v-model="sortDesc" mandatory>
                            <v-btn
                                large
                                depressed
                                color="indigo darken-1"
                                :value="false"
                            >
                                <v-icon>mdi-arrow-up</v-icon>
                            </v-btn>
                            <v-btn
                                large
                                depressed
                                color="indigo darken-1"
                                :value="true"
                            >
                                <v-icon>mdi-arrow-down</v-icon>
                            </v-btn>
                        </v-btn-toggle>
                    </template>
                </v-toolbar>
            </template>

            <template v-slot:default="props">
                <v-row>
                    <v-col
                        v-for="(item, index) in props.items"
                        :key="index"
                        cols="12"
                    >
                        <!-- cardbootstrap -->
    <div class="card mb-2 blue green darken-3 p-1">
                <div class="card-header brown lighten-2">
                    {{ item.nombrejuego }}
                </div>
                <div class="row no-gutters">
                    <div class="col-md-5">
                    <img
                        :src="item.image"
                        class="img-fluid"
                        style="height: 250px; width: 420px"
                    />
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <div class="row">
                        <div class="col">
                            <h1 class="card-title">${{ item.precio }}</h1>
                        </div>
                        <div class="col">
                            <h5 class="card-text text-bold text-right">
                            {{ item.clasificacion }}
                            </h5>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <h5 class="card-text">
                            {{ item.descripcion }}
                            </h5>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <div class="m-2">
                            <detalles :gameUniverse="item" />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                        <!-- fincardbootstrap -->
                    </v-col>
                </v-row>
            </template>

            <template v-slot:footer>
                <v-row class="mt-2" align="center" justify="center">
                    <span class="white--text">Items per page</span>
                    <v-menu offset-y>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                dark
                                text
                                color="indigo darken-3"
                                class="ml-2"
                                v-bind="attrs"
                                v-on="on"
                            >
                                {{ itemsPerPage }}
                                <v-icon>mdi-chevron-down</v-icon>
                            </v-btn>
                        </template>
                        <v-list>
                            <v-list-item
                                v-for="(number, index) in itemsPerPageArray"
                                :key="index"
                                @click="updateItemsPerPage(number)"
                            >
                                <v-list-item-title>{{
                                    number
                                }}</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>

                    <v-spacer></v-spacer>

                    <span class="mr-4 white--text">
                        Page {{ page }} of {{ numberOfPages }}
                    </span>
                    <v-btn
                        fab
                        dark
                        color="indigo darken-3"
                        class="mr-1"
                        @click="formerPage"
                    >
                        <v-icon>mdi-chevron-left</v-icon>
                    </v-btn>
                    <v-btn
                        fab
                        dark
                        color="indigo darken-3"
                        class="ml-1"
                        @click="nextPage"
                    >
                        <v-icon>mdi-chevron-right</v-icon>
                    </v-btn>
                </v-row>
            </template>
        </v-data-iterator>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [],
            show: false,
            itemsPerPageArray: [5, 8, 10, 25],
            search: "",
            filter: {},
            sortDesc: false,
            page: 1,
            itemsPerPage: 5,
            sortBy: "nombrejuego",
            keys: ["Precio", "Sistema"],
            sheet: false,
            clasi: [],
            hola: false,
            nombreclasi: ""
        };
    },
    created() {
        axios.get("/rpg").then(res => {
            this.items = res.data;
        });
    },
    computed: {
        numberOfPages() {
            return Math.ceil(this.items.length / this.itemsPerPage);
        },
        filteredKeys() {
            return this.keys.filter(key => key !== "Precio");
        }
    },
    methods: {
        nextPage() {
            if (this.page + 1 <= this.numberOfPages) this.page += 1;
        },
        formerPage() {
            if (this.page - 1 >= 1) this.page -= 1;
        },
        updateItemsPerPage(number) {
            this.itemsPerPage = number;
        }
    }
};
</script>
