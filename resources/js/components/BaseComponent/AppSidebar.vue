<template>
    <div>
        <div id="mySidebar" class="sidebar">
            <a class="close_collaspe" @click="closeNav()">close sm </a>
            <a class="closebtn" @click="closeNav()">×</a>
            <router-link to="/">Home 1</router-link>
            <router-link to="/notice">Notice </router-link>
            <router-link to="/">Home 3</router-link>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        closeNav() {
            console.log("closw nav");
            document.getElementById("mySidebar").style.width = "50px";
            document.getElementById("main_wrapper_contnent").style.marginLeft =
                "50px";
        },
        openNav() {
            console.log("closw nav");
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main_wrapper_contnent").style.marginLeft =
                "250px";
        }
    }
};
</script>

<style scoped lang="scss">
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.close_collaspe {
    display: none !important;
}
/* Small devices */
@media screen and (max-width: 640px) {
    .sidebar {
        background-color: red !important;
        width: 100% !important;
        padding-top: 0px;
        position: relative;
        height: auto;
        .closebtn {
            display: none;
        }
        .close_collaspe {
            display: contents !important;
        }
    }
}
</style>
