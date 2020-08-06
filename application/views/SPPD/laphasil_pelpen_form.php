<div class="page-title">
	<div class="title_left">
		<h3>Lap. Hasil: <?=$judul?> Pelaksana Pengikut
			<br>
			<small>Kode : 
				<?php $id_sppd = $this->uri->segment(2);
				$query = $this->db->query("SELECT * FROM tb_sppd WHERE id_sppd = '$id_sppd'");
				echo $query->row()->no_sppd; ?>
			</small>
		</h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" align="right">
				<a href="<?=site_url('sppd/'.$this->uri->segment(2).'/pelpen')?>" class="btn btn-sm btn-dark"><i class="fa fa-angle-left"></i> Kembali</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<form action="<?=site_url('sppd/pelpen/proses')?>" method="post" class="form-horizontal form-label-left" autocomplete="off">
					<div class="form-group">
						<label for="middle-name" class="control-label col-sm-4 col-xs-12">Pegawai *</label>
						<div class="col-sm-5 col-xs-12">
                            <input type="hidden" name="id_kegiatan" value="<?=$this->uri->segment(2)?>">
							<input type="hidden" name="id" value="<?=$row->id_lap_pelpen?>">
							<?=form_dropdown('pegawai', $pegawai, $selectedpegawai, ['class' => 'form-control', 'required' => 'required'])?>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-sm-6 col-xs-12 col-sm-offset-4">
							<input type="submit" name="<?=$page?>" value="Simpan" class="btn btn-success">
							<button class="btn btn-default" type="reset">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>