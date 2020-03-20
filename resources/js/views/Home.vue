<template>
  <div>
   <h1> i am home </h1>
  </div>
</template>

<script>
import AppHeader from '../components/BaseComponent/AppHeader'
import sidebar from '../components/BaseComponent/AppSidebar'

export default {
    components:{
        AppHeader,
        sidebar
    },
    methods:{
       openNav(){
            console.log("home open nav");
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";

        }
    }


}
</script>