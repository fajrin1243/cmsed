<div class="container">
	<?= getBread() ?>	

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Tambah Modul</h3>
				</div>
				<div class="panel-body">
					<div class="row"> 
						<div class="col-lg-12"> 
							<form class="form-horizontal" role="form" method="post" action="<?php echo base_url() ?>index.php/<?php echo getModule() ?>/<?php echo getController() ?>/save">
								<input type="hidden" name="idModule" class="form-control" value="<?php echo ($getModule) ? $getModule[0]['idModule'] : "" ?>">
								<?php echo input_text_group('nameModule','Nama',(@$getModule[0]['nameModule']) ? @$getModule[0]['nameModule'] : "",'Nama Modul','required') ?>
								<?php echo input_textarea_group('descModule','Keterangan',(@$getModule[0]['descModule']) ? @$getModule[0]['descModule'] : "",'Keterangan Modul','required') ?>
								<?php echo input_icon_group('iconModule','Icon',(@$getModule[0]['iconModule']) ? @$getModule[0]['iconModule'] : "",'Klik disini...','required') ?>
								<?php echo input_text_group('orderModule','Order',(@$getModule[0]['orderModule']) ? @$getModule[0]['orderModule'] : "",'Order Modul','required') ?>
								<?php echo input_radio_group('statusUser','Status',array('1'=>'Tampil','2'=>'Tidak Tampil'),'required') ?>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
										&nbsp;
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Batal</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>