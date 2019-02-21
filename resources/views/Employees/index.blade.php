@extends("layouts.master")

{{-- Judul --}}
@section("title")
  Data Pegawai
@endsection

@section("head")
<style>
    .panel-heading {
        padding: 0;
    }
    .panel-heading ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .panel-heading li {
        float: left;
        border-right:1px solid #bbb;
        display: block;
        padding: 14px 16px;
        text-align: center;
    }
    .panel-heading li:last-child:hover {
        background-color: #ccc;
    }
    .panel-heading li:last-child {
        border-right: none;
    }
    .panel-heading li a:hover {
        text-decoration: none;
    }

    .table.table-bordered tbody td {
        vertical-align: baseline;
    }
    /* icheck checkboxes */
    .iradio_flat-yellow {
        background: url(https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/yellow.png) no-repeat;
    }
    </style>
@endsection


{{-- Section Konten --}}
@section("konten")
<div class="container-fluid">
    <div class="col-lg-12">
        <h2 class="text-center">Kelola Data Pegawai</h2>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul>
                    <li>
                        <i class="fa fa-file-text-o"></i> Seluruh Pegawai
                    </li>
                    <li>
                        <button type='button' class='btn btn-primary' 
                        id='btnAdd' data-toggle="modal" data-target="#addModal">
                        Tambah Baru</button>
                    </li>
                    <li>
                        <button type='button' class='btn btn-danger' 
                        id='btnTest' data-toggle="modal" data-target="#testModal">
                        Test</button>
                    </li>
                    <li>
                        <div class='col-md-4' style="padding-top:15px">
                            Pencarian
                        </div>  
                        <div class='col-md-8'>
                            <input type="text" id="keywords" autocomplete="off" width=500px>
                        </div>                    
                    </li>
                    {{-- <a href="#" type="button" id="btn-add-modal" name="btn-add-modal"><li>Tambah Data</li></a> --}}
                </ul>
            </div>

            <div class="panel-body">                
                <table class="table table-striped table-bordered table-hover" 
                id="employeeTable">
                    <thead>
                        <tr>
                            <th valign="middle">ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pegawai Tetap?</th>
                            <th>Terakhir di Update</th>
                            <th>Operasi</th>
                        </tr>
                        {{ csrf_field() }}
                    </thead>
                    <tbody id="table-content">
                       
                        @include("employees.list")                              

                
            </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
    </div><!-- /.col-md-8 -->
</div> {{--container --}}


    {{-- modal percobaan --}}
    <div id="testModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>



    <!-- Modal form to add employee -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_add" autofocus>                                
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Alamat:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address_add" cols="40" rows="5"></textarea>                                
                                <p class="errorAddress text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class='fa fa-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='fa fa-delete'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to show a employee -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Alamat:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='fa fa-delete'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_edit" autofocus>
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address_edit" cols="40" rows="5"></textarea>
                                <p class="errorAddress text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='fa fa-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='fa fa-delete'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Anda yakin akan menghapus data ini ?</h4>
                    <br />
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_delete" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_delete" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                            <span id="btn-delete" class='fa fa-trash'></span> Delete
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='fa fa-delete'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection




    @section("script")
    <!-- Delay table load until everything else is loaded -->
    {{-- <script>
        $(window).load(function(){
            $('#employeeTable').removeAttr('style');
        })
    </script> --}}

    <script>
        $(document).ready(function(){
            $('.permanent').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.permanent').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });
            $('.permanent').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });
        
      

    //function keyup delay
    function debounce(fn, duration) {
    var timer;
    return function(){
        clearTimeout(timer);
        timer = setTimeout(fn, duration);
    }
    }

    $('#keywords').on('keyup', debounce(function(){ 
        $.ajax({ 
            url : '/employees', 
            type : 'GET', 
            dataType : 'json', 
            data : { 
                'keywords' : $('#keywords').val()                 
            }, success : function(data) { 
                $('#table-content').html(data['view']); 
                $('#keywords').val(data['keywords']);                 
            }, error : function(xhr, status) { 
                console.log(xhr.error + " ERROR STATUS : " + status); 
            }, complete : function() { 
                alreadyloading = false; 
            } 
        }); 
    }, 500)); 

    </script>

    <!-- AJAX CRUD operations -->
    <script type="text/javascript">
        // add a new employee

        $(document).on('click', '#btnAdd', function(e){
	        e.preventDefault();
            $('.modal-title').text('Tambah Pegawai');
            $('#addModal').modal('show');
        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type: 'POST',
                url: '/employees',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'name': $('#name_add').val(),
                    'address': $('#address_add').val()
                },
                success: function(data) {
                    $('.errorName').addClass('hidden');
                    $('.errorAddress').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.name) {
                            $('.errorName').removeClass('hidden');
                            $('.errorName').text(data.errors.name);
                        }
                        if (data.errors.address) {
                            $('.errorAddress').removeClass('hidden');
                            $('.errorAddress').text(data.errors.address);
                        }
                    } else {
                        toastr.success('Berhasil menambahkan pegawai..', 'Success Alert', {timeOut: 5000});
                        $('#employeeTable').append(
                            "<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td>" + data.address + "</td><td class='text-center'><input type='checkbox' class='new_permanent' data-id='" + data.id + " '></td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-eye'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-pencil'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-trash'></span> Delete</button></td></tr>");
                        $('.new_permanent').iCheck({
                            checkboxClass: 'icheckbox_square-yellow',
                            radioClass: 'iradio_square-yellow',
                            increaseArea: '20%'
                        });
                        $('.new_permanent').on('ifToggled', function(event){
                            $(this).closest('tr').toggleClass('warning');
                        });
                        $('.new_permanent').on('ifChanged', function(event){
                            id = $(this).data('id');
                            $.ajax({
                                type: 'POST',
                                url: "{{ URL::route('changeStatus') }}",
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'id': id
                                },
                                success: function(data) {
                                    // empty
                                },
                            });
                        });
                    }
                },
            });
        });

        // Show an employee
        $(document).on('click', '#btnShow', function() {
            $('.modal-title').text('Data Pegawai');
            $('#id_show').val($(this).data('id'));
            $('#name_show').val($(this).data('name'));
            $('#address_show').val($(this).data('address'));
            $('#showModal').modal('show');
        });


        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Edit Pegawai');
            $('#id_edit').val($(this).data('id'));
            $('#name_edit').val($(this).data('name'));
            $('#address_edit').val($(this).data('address'));
            id = $('#id_edit').val();
            $('#editModal').modal('show');
        });
        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: 'employees/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#id_edit").val(),
                    'name': $('#name_edit').val(),
                    'address': $('#address_edit').val()
                },
                success: function(data) {
                    $('.errorName').addClass('hidden');
                    $('.errorAddress').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.name) {
                            $('.errorName').removeClass('hidden');
                            $('.errorName').text(data.errors.name);
                        }
                        if (data.errors.address) {
                            $('.errorAddress').removeClass('hidden');
                            $('.errorAdress').text(data.errors.address);
                        }
                    } else {
                        toastr.success('Berhasil update artikel ..', 'Success Alert', {timeOut: 5000});
                        $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td>" + data.address + "</td><td class='text-center'><input type='checkbox' class='edit_permanent' data-id='" + data.id + "'></td><td>Right now</td><td><button id='btnShow' class='show-modal btn btn-success' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-eye'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-pencil'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-address='" + data.address + "'><span class='fa fa-trash'></span> Delete</button></td></tr>");

                        if (data.is_permanent) {
                            $('.edit_permanent').prop('checked', true);
                            $('.edit_permanet').closest('tr').addClass('warning');
                        }
                        $('.edit_permanent').iCheck({
                            checkboxClass: 'icheckbox_square-yellow',
                            radioClass: 'iradio_square-yellow',
                            increaseArea: '20%'
                        });
                        $('.edit_permanent').on('ifToggled', function(event) {
                            $(this).closest('tr').toggleClass('warning');
                        });
                        $('.edit_published').on('ifChanged', function(event){
                            id = $(this).data('id');
                            $.ajax({
                                type: 'POST',
                                url: "{{ URL::route('changeStatus') }}",
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'id': id
                                },
                                success: function(data) {
                                    // empty
                                },
                            });
                        });
                    }
                }
            });
        });
// 

        // delete an employee
        $(document).on('click', '.delete-modal', function() {
            // e.preventDefault();
            $('.modal-title').text('Hapus Data');
            $('#id_delete').val($(this).data('id'));
            $('#name_delete').val($(this).data('name'));            
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
            
        });
        $('.modal-footer').on('click', '.delete', function() {            
            $.ajax({
                type: "DELETE",                
                url: "employees/" + id, 
                cache: false,
                // timeout: 2000,               
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': id                                                            
                },
                success: function() {
                    //$('.item' + data['id']).remove();
                    // $tr.remove(); 
                    // toastr.success('Sukses menghapus pegawai', 'Success Alert', {timeOut: 5000});
                    //  $('#item' + deleteid).remove();
                    //$('#item' + deleteid).closest('tr').remove();
                    // $tr.find('td').fadeOut(1000,function(){ 
                    //     $tr.remove();                    
                    // }); 

                    // $('.col1').each(function (index) {
                    //     $(this).html(index+1);                    
                    // });

                    // tr = $(this).closest('tr');
                    //  tr.remove();
                    alert("okey");
                }
            });
        });

    </script>
@endsection