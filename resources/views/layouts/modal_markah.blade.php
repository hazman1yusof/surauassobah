
<!-- Modal -->
<div class="modal fade" id="modaldaftarahli" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dafter Ahli Kariah As-Sobah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
	    <form method="POST" action="/talaqqi" id="talaqqiform">
        @csrf
        <input type="hidden" name="oper" value="add">
        
          <fieldset class="form-fieldset">
          <div class="form-group">
            <label class="form-label">Nama</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="fe fe-user"></i>
              </span>
              <input type="input" class="form-control" placeholder="Name" name="nama" required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">No k/p</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="fe fe-credit-card"></i>
              </span>
              <input type="input" class="form-control" placeholder="No. k/p" name="icno" required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">No h/p</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="fe fe-phone"></i>
              </span>
              <input type="input" class="form-control" placeholder="No. telefon" name="telno"  required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" required></textarea>
          </div></fieldset>


        <button type="submit" class="btn btn-primary float-right ml-2">Dafter Ahli</button>
        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancel</button>

	    </form>
      </div>

    </div>
  </div>
</div>