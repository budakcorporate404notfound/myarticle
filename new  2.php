<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudentsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="Store" id="form-upload" enctype="multipart/form-data">
                    {{-- <form action=""> --}}
                    <div class="form-group">
                        <label for="asal_surat">asal surat</label>
                        <input type="text" name="asal_surat" class="form-control" wire:model="asal_surat">
                        @error('asal_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_surat">nomor surat</label>
                        <input type="text" name="nomor_surat" class="form-control" wire:model="nomor_surat">
                        @error('nomor_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_surat">tanggal surat</label>
                        <input type="date" name="tanggal_surat" class="form-control" wire:model="tanggal_surat">
                        @error('tanggal_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="perihal_surat">perihal surat</label>
                        <input type="text" name="perihal_surat" class="form-control" wire:model="perihal_surat">
                        @error('perihal_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pejabat_pengirim_surat">pejabat pengirim surat</label>
                        <input type="text" name="pejabat_pengirim_surat" class="form-control"
                            wire:model="pejabat_pengirim_surat">
                        @error('pejabat_pengirim_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="surat_ditujukan_kepada">surat ditujukan kepada</label>
                        <input type="text" name="surat_ditujukan_kepada" class="form-control"
                            wire:model="surat_ditujukan_kepada">
                        @error('surat_ditujukan_kepada')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pdf_surat">pdf surat</label>
                        <input type="file" name="pdf_surat" class="form-control" wire:model="pdf_surat" multiple>
                        @error('pdf_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-success float-right">Tambah</button>
                    </div>

                </form>

                
            </div>

        </div>
    </div>
</div>