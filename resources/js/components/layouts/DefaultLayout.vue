<template>
  <div>
     <sidebar/>
      <div id="main_wrapper_contnent">
        <div class="breadcum">
        <button class="openbtn" @click="openNav">☰ </button>  
        </div>
         <router-view/>
      </div>
  </div>
</template>

<script>
import sidebar from '../BaseComponent/AppSidebar'
export default {
  components:{
    sidebar
  },
   methods:{
       openNav(){
            console.log("home open nav");
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main_wrapper_contnent").style.marginLeft = "250px";

        }
    }

}
</script>

<style scoped>
.openbtn {
    font-size: 20px;
    cursor: pointer;
    color: #070f1f6b;
    border: none;
}
#main_wrapper_contnent {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 250px;
}
.breadcum {
    border-bottom: 1px solid #d8dce2d9;
}
</style>