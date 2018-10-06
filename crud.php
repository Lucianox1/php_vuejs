
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud php y vuejs</title>

</head>
<body>
	<div id="divmain">
		<form method="POST">
			<input type="text" v-model="txtnombre" placeholder="Nombre" >
			<input type="text" v-model="txtcolor" placeholder="Color">
			<button id="btnguardar"  v-on:click="guardar" >Guardar</button>
		</form>
	</div>
	<div id="div_tabla" name="div_tabla">
		<p v-model="p_respuesta">hola</p>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script type="text/javascript">
	new Vue({
		el: "#divmain",
		data:{
			fruta:[]
		},
		txtnombre: '',
		txtcolor: '',
		p_respuesta: '',
		methods:{
			guardar: function(){
				axios.post('ctr_fruta.php',{
					opcion:'1',
					nombre: this.txtnombre,
					color: this.txtcolor
				})
				.then((res) => {
					alert(res.data)
				})
				.catch(function (error) {
    				alert("fallo")
  				});
			},
			cargar: function(){
				axios.get('ctr_fruta.php?opcion=2').then(response => {
						this.fruta = response.data;
						console.log(this.fruta);
				});
			}
			/*
			axios.post('/save', { firstName: 'Marlon', lastName: 'Bernardes' })
  .then(function(response){
    console.log('saved successfully')
  });  
			*/
		}
	}); 
</script>
</html>