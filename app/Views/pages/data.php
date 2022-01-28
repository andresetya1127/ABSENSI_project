<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->

<div class="container mt-5 ms-6 con-w mw-web">
    <section>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success" onclick="add()" title="Tambah Data" data-bs-toggle="tooltip" data-bs-placement="top"><i class="bi bi-cloud-plus-fill"></i></button>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="data_table" class="table table-hover text-center">
                    <thead class="table-dark font-1">
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tgl lahir</th>
                            <th>No hp</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>
<!-- /.row -->
</div>
</section>
<!-- Add modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="text-center bg-success p-3">
                <h4 class="modal-title text-white" id="info-header-modalLabel">Tambah Data Siswa</h4>
            </div>
            <div class="modal-body">
                <form id="add-form" class="pl-3 pr-3">
                    <div class="row">
                        <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nim"> Nim: <span class="text-danger">*</span> </label>
                                <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim" maxlength="11" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama"> Nama: <span class="text-danger">*</span> </label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" maxlength="150" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat"> Alamat: <span class="text-danger">*</span> </label>
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" maxlength="150" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tglLahir"> Tgl lahir: </label>
                                <input type="date" id="tglLahir" name="tglLahir" class="form-control" dateISO="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="noHp"> No hp: <span class="text-danger">*</span> </label>
                                <input type="text" id="noHp" name="noHp" class="form-control" placeholder="No hp" maxlength="13" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="noHp"> Status: <span class="text-danger">*</span> </label>
                            <div class="form-group">
                                <select for="status" class="form-select text-center" aria-label="Default select example" id="status" name="status" required>
                                    <option value="" hidden></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Tidak Aktif">Tida Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success" id="add-form-btn"><i class="bi bi-check-circle-fill"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Edit modal content -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="text-center bg-info p-3">
                <h4 class="modal-title text-white" id="info-header-modalLabel">Update</h4>
            </div>
            <div class="modal-body">
                <form id="edit-form" class="pl-3 pr-3">
                    <div class="row">
                        <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nim"> Nim: <span class="text-danger">*</span> </label>
                                <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim" maxlength="11" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama"> Nama: <span class="text-danger">*</span> </label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" maxlength="150" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat"> Alamat: <span class="text-danger">*</span> </label>
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" maxlength="150" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tglLahir"> Tgl lahir: </label>
                                <input type="date" id="tglLahir" name="tglLahir" class="form-control" dateISO="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="noHp"> No hp: <span class="text-danger">*</span> </label>
                                <input type="text" id="noHp" name="noHp" class="form-control" placeholder="No hp" maxlength="13" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="noHp"> Status: <span class="text-danger">*</span> </label>
                            <div class="form-group">
                                <select for="status" class="form-select text-center" aria-label="Default select example" id="status" name="status" required>
                                    <option value="" hidden></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Tidak Aktif">Tida Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success" id="edit-form-btn"><i class="bi bi-check-circle-fill"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->


<script>
    $(function() {
        $('#data_table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "ajax": {
                "url": '<?php echo base_url($controller . '/getAll') ?>',
                "type": "POST",
                "dataType": "json",
                async: "true"
            }
        });
    });

    function add() {
        // reset the form 
        $("#add-form")[0].reset();
        $(".form-control").removeClass('is-invalid').removeClass('is-valid');
        $('#add-modal').modal('show');
        // submit the add from 
        $.validator.setDefaults({
            highlight: function(element) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            },
            errorElement: 'div ',
            errorClass: 'invalid-feedback',
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else if ($(element).is('.select')) {
                    element.next().after(error);
                } else if (element.hasClass('select2')) {
                    //error.insertAfter(element);
                    error.insertAfter(element.next());
                } else if (element.hasClass('selectpicker')) {
                    error.insertAfter(element.next());
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {

                var form = $('#add-form');
                // remove the text-danger
                $(".text-danger").remove();

                $.ajax({
                    url: '<?php echo base_url($controller . '/add') ?>',
                    type: 'post',
                    data: form.serialize(), // /converting the form data into array and sending it to server
                    dataType: 'json',
                    beforeSend: function() {
                        $('#add-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
                    },
                    success: function(response) {

                        if (response.success === true) {

                            Swal.fire({
                                position: 'bottom-end',
                                icon: 'success',
                                title: response.messages,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                                $('#add-modal').modal('hide');
                            })

                        } else {

                            if (response.messages instanceof Object) {
                                $.each(response.messages, function(index, value) {
                                    var id = $("#" + index);

                                    id.closest('.form-control')
                                        .removeClass('is-invalid')
                                        .removeClass('is-valid')
                                        .addClass(value.length > 0 ? 'is-invalid' : 'is-valid');

                                    id.after(value);

                                });
                            } else {
                                Swal.fire({
                                    position: 'bottom-end',
                                    icon: 'error',
                                    title: response.messages,
                                    showConfirmButton: false,
                                    timer: 1500
                                })

                            }
                        }
                        $('#add-form-btn').html('Add');
                    }
                });

                return false;
            }
        });
        $('#add-form').validate();
    }

    function edit(id) {
        $.ajax({
            url: '<?php echo base_url($controller . '/getOne') ?>',
            type: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                // reset the form 
                $("#edit-form")[0].reset();
                $(".form-control").removeClass('is-invalid').removeClass('is-valid');
                $('#edit-modal').modal('show');

                $("#edit-form #id").val(response.id);
                $("#edit-form #nim").val(response.nim);
                $("#edit-form #nama").val(response.nama);
                $("#edit-form #alamat").val(response.alamat);
                $("#edit-form #tglLahir").val(response.tgl_lahir);
                $("#edit-form #noHp").val(response.no_hp);
                $("#edit-form #status").val(response.status);

                // submit the edit from 
                $.validator.setDefaults({
                    highlight: function(element) {
                        $(element).addClass('is-invalid').removeClass('is-valid');
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('is-invalid').addClass('is-valid');
                    },
                    errorElement: 'div ',
                    errorClass: 'invalid-feedback',
                    errorPlacement: function(error, element) {
                        if (element.parent('.input-group').length) {
                            error.insertAfter(element.parent());
                        } else if ($(element).is('.select')) {
                            element.next().after(error);
                        } else if (element.hasClass('select2')) {
                            //error.insertAfter(element);
                            error.insertAfter(element.next());
                        } else if (element.hasClass('selectpicker')) {
                            error.insertAfter(element.next());
                        } else {
                            error.insertAfter(element);
                        }
                    },

                    submitHandler: function(form) {
                        var form = $('#edit-form');
                        $(".text-danger").remove();
                        $.ajax({
                            url: '<?php echo base_url($controller . '/edit') ?>',
                            type: 'post',
                            data: form.serialize(),
                            dataType: 'json',
                            beforeSend: function() {
                                $('#edit-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
                            },
                            success: function(response) {

                                if (response.success === true) {

                                    Swal.fire({
                                        position: 'bottom-end',
                                        icon: 'success',
                                        title: response.messages,
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(function() {
                                        $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                                        $('#edit-modal').modal('hide');
                                    })

                                } else {

                                    if (response.messages instanceof Object) {
                                        $.each(response.messages, function(index, value) {
                                            var id = $("#" + index);

                                            id.closest('.form-control')
                                                .removeClass('is-invalid')
                                                .removeClass('is-valid')
                                                .addClass(value.length > 0 ? 'is-invalid' : 'is-valid');

                                            id.after(value);

                                        });
                                    } else {
                                        Swal.fire({
                                            position: 'bottom-end',
                                            icon: 'error',
                                            title: response.messages,
                                            showConfirmButton: false,
                                            timer: 1500
                                        })

                                    }
                                }
                                $('#edit-form-btn').html('Update');
                            }
                        });

                        return false;
                    }
                });
                $('#edit-form').validate();

            }
        });
    }

    function remove(id) {
        Swal.fire({
            title: 'Yakin Ingin Hapus Data?',
            text: "Data Tidak Akan Kembali Setelah Di Hapus.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {

            if (result.value) {
                $.ajax({
                    url: '<?php echo base_url($controller . '/remove') ?>',
                    type: 'post',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(response) {

                        if (response.success === true) {
                            Swal.fire({
                                position: 'bottom-end',
                                icon: 'success',
                                title: response.messages,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                            })
                        } else {
                            Swal.fire({
                                position: 'bottom-end',
                                icon: 'error',
                                title: response.messages,
                                showConfirmButton: false,
                                timer: 1500
                            })


                        }
                    }
                });
            }
        })
    }
</script>
<?= $this->endSection(); ?>