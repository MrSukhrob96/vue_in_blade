new Vue({
el:'#stoplist',
data:{
stoplist:null,
desc:true,
},
methods:{
loadstoplist:function(){
  const self = this;
  axios.get('/loadstoplist').then(function(response){
  self.stoplist = response.data;
  });
},
toexcel:function(){
  TableToExcel.convert(this.$refs.table, {
     name: `stoplist.xlsx`,
     sheet: {
     name: 'Лист 1'
     }
   });
}
},
mounted(){
this.$nextTick(function (){
this.loadstoplist();
})
}
})
