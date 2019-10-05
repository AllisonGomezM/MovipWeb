<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a class="scrollto">Movip  <span>Talento Humano</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?= base_url()?>index.php/welcome/login" class="btn btn-outline-success btn-lg text-center"><i class="fa fa-sign-out"></i> Salir</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    
  </header><!-- #header -->
<main class="profile-page">
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
           <div class="container">
             <hr>
             <div class="container"><h3>Informes Novedades</h3></div>

              <div class="container content-center">
				  <br>
            <table id="novedades_table" class="table table-striped table-bordered table-responsive" role="grid" aria-describedby="datatable-responsive_info" style="width:100%" width="100%" cellspacing="0">
              <thead>
              <tr class="tr">
			  	<th>Id Novedad</th>
				<th>No. contrato </th>
                <th>Tipo Novedad</th>
				<th>Empleado reporta</th>
				<th>Descripcion</th>
				<th>Fecha reporte</th>
			   </tr>
			   </thead>
			   </table>
			  </div>
			  <hr>
           </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
        
          $(document).ready(function(){
            var c;
            var b=$("#novedades_table").DataTable({
              bProcessing:true,
              bServerSide:false,
              bStateSave: true,
              dom:"Bfrtip",
              columns:c,
              buttons:["excel","pdf","csv"],
              ajax:{
                url:"<?=base_url();?>index.php/login/dataNovedades",
                type:"GET"
                },
                columns:[
                  {result:"id_novedad",visible:false},
                  {result:"id_contrato"},
                  {result:"tipo_novedad"},
                  {result:"nombre"},
                  {result:"descripcion"},
                  {result:"fecha_reporte"},
                  ],
                  language:{
                    lengthMenu:"Mostrar MENU registros por página.",
                    zeroRecords:"Lo sentimos. No se encontraron registros.",
                    sInfo:"Mostrando: START de END - Total registros: TOTAL ",
                    infoEmpty:"No hay registros aún.",
                    infoFiltered:"(filtrados de un total de MAX registros)",
                    search:"Buscar:",
                    LoadingRecords:"Cargando ...",
                    Processing:"Procesando...",
                    SearchPlaceholder:"Comience a teclear...",
                    paginate:{
                      previous:"Anterior",
                      next:"Siguiente",
                      }}});
                    
                    
                    $(document).on("click",".edit",function(){
                      var d=$(this).parents("tr");
                      if(d.hasClass("child")){
                        d=d.prev()
                        }
                        var f=b.row(d).data();
                        var e="<?=base_url();?>index.php/utilidades/edit/"+f[0];
                        window.location.href=e});
                        
                    $(document).on("click",".remove",function(){
                      var e=$(this).parents("tr");
                      if(e.hasClass("child")){
                        e=e.prev()
                        }
                        var g=b.row(e).data();
                        var f="<?=base_url();?>index.php/utilidades/delete/"+g[0];
                      
                        dataType: "JSON",a(g[0], f);
                        console.log(g[0]);
                          
                        });
                        
                        function a(d,e){
                          swal({
                            title:"Esta seguro?",
                            text:"La utilidad será eliminada permanentemente!",
                            type:"warning",
                            showCancelButton:true,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Si, eliminar!",
                            showLoaderOnConfirm:true,
                            cancelButtonText:"Cancelar",
                            preConfirm:function(){
                              return new Promise(function(f){
                                $.ajax({  
                                  type:'DELETE',
                                  url:e,
                                  data:{
                                    '_token': $('meta[name="_token"]').attr('content'),
                                  },
                                  success:function(g,i,h){
                                    b.ajax.reload();
                                    console.log("entra");
                                    swal("Eliminado exitosamente!",g.message,g.status)}
                                    })
                                    .done(function(g){
                                      swal("Eliminado exitosamente!",g.message,g.status)})
                                    .fail(function(){
                                    swal("Lo sentimos.","Un error ha ocurrido !","error")
                                })
                            })
                          },
                       allowOutsideClick:false}
                                      )}});
        </script>
<!--informe personal-->
<section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
           <div class="container">
             <hr>
             <div class="container"><h3>Informe Personal</h3></div>

              <div class="container content-center">
				  <br>
            <table id="personal_table" class="table table-striped table-bordered table-responsive" role="grid" aria-describedby="datatable-responsive_info" style="width:100%" width="100%" cellspacing="0">
              <thead>
              <tr class="tr">
			  	    <th>Cedula</th>
				      <th>Nombre y apellido </th>
              <th>Estado </th>
			   </tr>
			   </thead> 
			   </table>
			  </div>
			  <hr>
           </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
        
          $(document).ready(function(){
            var c;
            var b=$("#personal_table").DataTable({
              bProcessing:true,
              bServerSide:false,
              bStateSave: true,
              dom:"Bfrtip",
              columns:c,
              buttons:["excel","pdf","csv"],
              ajax:{
                url:"<?=base_url();?>index.php/login/dataPersonal",
                type:"GET"
                },
                columns:[
                  {result:"id_empleado",visible:true},
                  {result:"nombre"},
                  {result:"nombre_estado"},
                  ],
                  language:{
                    lengthMenu:"Mostrar MENU registros por página.",
                    zeroRecords:"Lo sentimos. No se encontraron registros.",
                    sInfo:"Mostrando: START de END - Total registros: TOTAL ",
                    infoEmpty:"No hay registros aún.",
                    infoFiltered:"(filtrados de un total de MAX registros)",
                    search:"Buscar:",
                    LoadingRecords:"Cargando ...",
                    Processing:"Procesando...",
                    SearchPlaceholder:"Comience a teclear...",
                    paginate:{
                      previous:"Anterior",
                      next:"Siguiente",
                      }}});
                    
                    
                    $(document).on("click",".edit",function(){
                      var d=$(this).parents("tr");
                      if(d.hasClass("child")){
                        d=d.prev()
                        }
                        var f=b.row(d).data();
                        var e="<?=base_url();?>index.php/utilidades/edit/"+f[0];
                        window.location.href=e});
                        
                    $(document).on("click",".remove",function(){
                      var e=$(this).parents("tr");
                      if(e.hasClass("child")){
                        e=e.prev()
                        }
                        var g=b.row(e).data();
                        var f="<?=base_url();?>index.php/utilidades/delete/"+g[0];
                      
                        dataType: "JSON",a(g[0], f);
                        console.log(g[0]);
                          
                        });
                        
                        function a(d,e){
                          swal({
                            title:"Esta seguro?",
                            text:"La utilidad será eliminada permanentemente!",
                            type:"warning",
                            showCancelButton:true,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Si, eliminar!",
                            showLoaderOnConfirm:true,
                            cancelButtonText:"Cancelar",
                            preConfirm:function(){
                              return new Promise(function(f){
                                $.ajax({  
                                  type:'DELETE',
                                  url:e,
                                  data:{
                                    '_token': $('meta[name="_token"]').attr('content'),
                                  },
                                  success:function(g,i,h){
                                    b.ajax.reload();
                                    console.log("entra");
                                    swal("Eliminado exitosamente!",g.message,g.status)}
                                    })
                                    .done(function(g){
                                      swal("Eliminado exitosamente!",g.message,g.status)})
                                    .fail(function(){
                                    swal("Lo sentimos.","Un error ha ocurrido !","error")
                                })
                            })
                          },
                       allowOutsideClick:false}
                                      )}});
        </script>
        <!--informe convocatoria-->
<section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
           <div class="container">
             <hr>
             <div class="container"><h3>Informe Convocatoria</h3></div>

              <div class="container content-center">
				  <br>
            <table id="convocatoria_table" class="table table-striped table-bordered table-responsive" role="grid" aria-describedby="datatable-responsive_info" style="width:100%" width="100%" cellspacing="0">
            <thead>
              <tr class="tr">
                <th>Id </th>
                <th>Cedula </th>
                <th>Nombre y apellido </th>
                <th>Direccion </th>
                <th>Telefono </th>
			        </tr>
			   </thead>
			   </table>
			  </div>
			  <hr>
           </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
        
          $(document).ready(function(){
            var c;
            var b=$("#convocatoria_table").DataTable({
              bProcessing:true,
              bServerSide:false,
              bStateSave: true,
              dom:"Bfrtip",
              columns:c,
              buttons:["excel","pdf","csv"],
              ajax:{
                url:"<?=base_url();?>index.php/login/dataConvocatoria",
                type:"GET"
                },
                columns:[
                  {result:"id_aspirante",visible:false},
                  {result:"cc_aspirante"},
                  {result:"nombre"},
                  {result:"direccion_aspirante"},
                  {result:"telefono_aspirante"},
                  ],
                  language:{
                    lengthMenu:"Mostrar MENU registros por página.",
                    zeroRecords:"Lo sentimos. No se encontraron registros.",
                    sInfo:"Mostrando: START de END - Total registros: TOTAL ",
                    infoEmpty:"No hay registros aún.",
                    infoFiltered:"(filtrados de un total de MAX registros)",
                    search:"Buscar:",
                    LoadingRecords:"Cargando ...",
                    Processing:"Procesando...",
                    SearchPlaceholder:"Comience a teclear...",
                    paginate:{
                      previous:"Anterior",
                      next:"Siguiente",
                      }}});
                    
                    
                    $(document).on("click",".edit",function(){
                      var d=$(this).parents("tr");
                      if(d.hasClass("child")){
                        d=d.prev()
                        }
                        var f=b.row(d).data();
                        var e="<?=base_url();?>index.php/utilidades/edit/"+f[0];
                        window.location.href=e});
                        
                    $(document).on("click",".remove",function(){
                      var e=$(this).parents("tr");
                      if(e.hasClass("child")){
                        e=e.prev()
                        }
                        var g=b.row(e).data();
                        var f="<?=base_url();?>index.php/utilidades/delete/"+g[0];
                      
                        dataType: "JSON",a(g[0], f);
                        console.log(g[0]);
                          
                        });
                        
                        function a(d,e){
                          swal({
                            title:"Esta seguro?",
                            text:"La utilidad será eliminada permanentemente!",
                            type:"warning",
                            showCancelButton:true,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Si, eliminar!",
                            showLoaderOnConfirm:true,
                            cancelButtonText:"Cancelar",
                            preConfirm:function(){
                              return new Promise(function(f){
                                $.ajax({  
                                  type:'DELETE',
                                  url:e,
                                  data:{
                                    '_token': $('meta[name="_token"]').attr('content'),
                                  },
                                  success:function(g,i,h){
                                    b.ajax.reload();
                                    console.log("entra");
                                    swal("Eliminado exitosamente!",g.message,g.status)}
                                    })
                                    .done(function(g){
                                      swal("Eliminado exitosamente!",g.message,g.status)})
                                    .fail(function(){
                                    swal("Lo sentimos.","Un error ha ocurrido !","error")
                                })
                            })
                          },
                       allowOutsideClick:false}
                                      )}});
        </script>
  </main>
  