new Vue({
el:'#senders',
data:{
senders:null,
desc:true,
amt:0,
},
methods:{
loadsenders:function(){
  const self = this;
  axios.get('/loadsenders').then(function(response){
  self.senders = response.data.map(
  function(item){
  item.amt = Number(item.amt)
  return item;
  }
  );
  });
},
filtersenders:function(){
  const self = this;
  axios.get('/filtersenders',{
  params:{
  from:self.$refs.from.value,
  to:self.$refs.to.value
  }
  }).then(function(response){
  self.senders = response.data.map(
    function(item){
    item.amt = Number(item.amt)
    return item;
    }   
  );
});

},
sort: function(){
  const self = this;
  if(this.desc == true){
    this.senders.sort(function(x, y) {
       self.desc = false
       return y.amt - x.amt;
     })
    }
    else if (this.desc == false) {
      this.senders.sort(function(x, y) {
         self.desc = true
         return x.amt - y.amt;
       })
    }

   return this.senders;
},
toexcel:function(){
  TableToExcel.convert(this.$refs.table, {
     name: `report.xlsx`,
     sheet: {
     name: 'Лист 1'
     }
   });
},
filter:function(){
  const self = this;
  this.senders = this.senders.filter(
    function(sender){
     if(sender.amt >= Number(self.amt)){
      return sender;
     }
    }
);
}
},
mounted(){
this.$nextTick(function (){
this.loadsenders();
})
}
})
