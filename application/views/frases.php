<section>
	
      <div class="container" id="main">
        <div class="row align-items-center">
          <div class="col-lg-12 ">
			<div class="container content table-responsive table-full-width" id="main">
				<br><br>
				<h4 class="text-center">{{$titulo_p}} <button class="btn btn-xs btn-success btnform pull-right"><i class="fa fa-plus bigger-120"></i></button></h4>
				<?=$custom_error?>
				<table class="table table-striped">
					<thead>
						<th>ID</th>
						<th>Frase</th>
						<th>Autor</th>
						<th>Tag</th>
						<th>Ação</th>
					</thead>
					<tbody>
					@foreach ($frases as $f)
						<tr>
							<td>{{ $f->a }}</td>
							<td>{{ $f->b }}</td>
							<td>{{ $f->c }}</td>
							<td>{{ $f->d }}</td>
							<td>
								<div class="btn-group">
		
					<button class="btn btn-xs btn-info btn-edt" id="{{ $f->a }}">
						<i class="ace-icon fa fa-pencil bigger-120"></i>
					</button>

					<button class="btn btn-xs btn-danger btn-del" id="{{ $f->a }}">
						<i class="ace-icon fa fa-trash-o bigger-120"></i>
					</button>

				</div>
							</td>
						</tr>
					@endforeach
						
					</tbody>
				</table>
				
				<?=$pag?>
				
			</div>
		  </div>         
        </div>
      </div>
	  

	</form>


</section>


<div class="modal fade" id="modal_form"  role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
					<h3 class="modal-title smaller lighter blue no-margin">Frases</h3>
				</div>
				<!--<form id="form" class="form-horizontal"  action="#" method="post" accept-charset="utf-8">	-->
				<form id="form" uri="<?=site_url()?>">
			<div class="modal-body">
				<input type="hidden" name="idd" id="idd"/>
				<label>Frase</label>
				<input type="text" name="frase" class="form-control" placeholder="Frase">
				<label>Autor</label>
				<input type="text" name="autor" class="form-control" placeholder="Autor">
				<label>Tag</label>
				<input type="text" name="tag" class="form-control" placeholder="Tag">
			</div>
			<div class="modal-footer">
				  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-edit">Cancelar</button>
				  <button class="btn btn-success btn-submit">Submit</button>
			</div>
			</form>
			<div class="alert alert-danger print-error-msg" style="display:none"></div>
		</div>
	</div>
</div>


<script  src="<?=base_url()?>assets/_js/prog/frases.js"></script>	
