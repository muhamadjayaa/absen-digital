<div class="container-fluid">
<h1 class="my-4"><span class="fas fa-file-medical"></span> Buat Laporan</h1>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script> 
<form>
  <div class="form-group">
    <label for="Laporan">Judul Laporan</label>
    <input type="text" class="form-control" id="" name="judullaporan">
  </div>
  <div class="form-group">
    <label for="absen_tahun" class="col-sm-4 col-form-label">Tahun Absen</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="absen_tahun" name="absen_tahun" readonly>
    <?= form_error('absen_tahun'); ?>
    </div>
    </div>
    <div class="form-group">
    <label for="absen_bulan" class="col-sm-4 col-form-label">Bulan Absen</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="absen_bulan" name="absen_bulan" readonly>
    <?= form_error('absen_bulan'); ?>
    </div>
    </div>
  
    <div class="form-group">
    <label for="Penempatan">Penempatan</label>
    <input type="text" class="form-control" id="" name="penempatan">
  </div>
</form>
<textarea name="editor1"></textarea><br/>  

<script>  
    CKEDITOR.replace('editor1');    
  
    function getData() {  
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['editor1'].getData();  
    }  
</script>  
<button type="submit" class="btn btn-primary justify-content-end">Submit</button> 