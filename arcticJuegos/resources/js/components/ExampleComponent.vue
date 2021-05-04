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
            </v-list>
        </v-navigation-drawer>
        <v-app-bar app clipped-left>
            <v-toolbar-title>
                <v-icon color="blue" size="100px">mdi-gamepad-variant</v-icon
                >Arctic Game Universe</v-toolbar-title
            >
        </v-app-bar>
        <v-main>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-main>
        <v-footer app> </v-footer>
    </v-app>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    created() {
        this.$vuetify.theme.dark = true;
    }
};
</script>
