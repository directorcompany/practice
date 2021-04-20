<template>
<div id="app">
<div v-html="html">Milliarder Uzakbaev Axmet INSHALAAX</div>
{{billionerI}}
<data-list></data-list>
<input v-model="data" v-on:keyup.enter="metod">
<button @click.prevent.stop="metod">Добавить</button>
<ul>
  <li v-for='(mycompany,index,number) in mycompanies'>{{mycompany}} - {{index}} {{number}}</li>
  </ul>
</div>
</template>
<script>
Vue.component('data-list', {
  template: `<p>This is a todo</p>`
}) 
  export default {
    component: [
      'data-list'
   ],
  data() {  
    return {
    html: '<h2>$ Milliarder Axmet INSHALAAX</h2>',
    data: '',
    mycompanies: 
    {  html1: 'Mybest', html2: 'Smileshow', html3: 'Nayjol'},
   // { },
    //{ },
    //{ html: 'Ritorika'},
    //{ html: 'bug'}
    }
   
  },
   methods:{
     metod: function()  {
       this.mycompanies.push({html: this.data});
       this.data='';
     }
   },
   computed: {
     billionerI: function() {
      if(this.data.length>1) {
        return this.data + ' billioner';
      } 
     }
   }
}
</script>
<style>
.red {
  border: 2px solid red;
}
.blue {
  border: 2px solid blue;
}
</style>