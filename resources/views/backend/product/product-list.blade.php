
@extends('backend.layout.main')
@push('title')
All Medicines
@endpush
@section('main-section')
    <section class="content">
    	<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Medicines</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{ url('BackEnd/dashboard') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Medicines</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Staff Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Medicines</strong> Section</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="btn-group m-l-15">
                                            <button id="addRow" class="btn btn-info">
                                                Add Medicines
                                                <i class="fa fa-plus add-plus-btn"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table id="tableExport"
                                    class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                           <th>Name</th>
                                           <th>Title</th>
                                            <th>Picture</th>
                                            <th>Cat Name</th>
                                            <th>Ispublic</th>
                                            <th>Created date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($product as $key => $product) { $key++; ?>
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td>
                                                 @if( $product->pname != '')
                                                {{ $product->pname }}
                                                @else
                                                --------------
                                                @endif
                                            </td>
                                            <td>
                                                 @if( $product->p_title != '')
                                                {{ $product->p_title }}
                                                @else
                                                --------------
                                                @endif
                                            </td>
                                            <td>
                                            @if( $product->p_img_url != '')
                                             <img src="{{ $product->p_img_url }}" class="table-img-size"
                                                alt="product Image" />
                                            @else
                                            <img src="{{ url('') }}/public/assets/images/dummy1.jpg" class="dummy-img"
                                                alt="product Image" />
                                            @endif
                                            </td>
                                            <td>
                                                 @if( $product->cat_name != '')
                                                {{ $product->cat_name }}
                                                @else
                                                -------------
                                                @endif
                                            </td>
                                            <td>
                                            @if($product->p_status == 1) 
                                                <span class="label bg-green">Active</span>
                                            @else
                                                <span class="label bg-red">Inactive</span>
                                            @endif  
                                            </td>
                                             <td>{{ $product->created_date }}</td>
                                            <td>
                                                <a href="javascript:void(0);" onClick="editdevices('<?php echo base64_encode($product->p_id) ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="javascript:void(0);" onClick="removedevices('<?php echo base64_encode($product->p_id) ?>')"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                            </td>
                                           
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </section>
    <script type="text/javascript">
        var url = {!! json_encode(url('BackEnd/productForm')) !!}
        $('#addRow').click(function(){
            location.replace(url);
        });

        function editdevices(id){
            var url = '<?php echo url('BackEnd/productForm') ?>'+'/'+id;
            swal({
                  title: `Are you sure you want to edit this record?`,
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                  location.replace(url);
                }
            });
        }

        function removedevices(id){
            var url = '<?php echo url('BackEnd/deviceDelete') ?>'+'/'+id;
            swal({
                  title: `Are you sure you want to delete this record?`,
                  text: "If you delete this, it will be gone forever.",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                  location.replace(url);
                }
            });
        }
    </script>
    @include('backend.layout.multi-format-button');

@endsection