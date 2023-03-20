@extends('backend.layout.main')
@push('title')
    <?php
  if( isset($product['data']['p_id'])  && $product['data']['p_id']!= ''){
      echo "Update Medicines";
  }else{
      echo "Generate Medicines";
  }
?>
@endpush
@section('main-section')
<style>
    /* ------   Image Preview can't put into style.css ------(End)--- */
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
      content: "\f4ff";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #000000;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
    content: "\f4ff";
    font-size: 16px;

}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
    <section class="content">
      <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Medicine Details</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{ url('BackEnd/dashboard') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2 active">
                                <a href="{{ URL::current() }}">Medicines Form</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- catlist Form -->
            <div class="row clearfix">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="body border-body">
                            <form id="form_validation" action="{{ url('BackEnd/productSave') }}" method="POST" onsubmit="return checkTicketForm();" enctype="multipart/form-data">
                                @csrf
                                <!-- For image Preview --> 
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                         @if( isset($product['data']['p_img_url'])  && $product['data']['p_img_url'] != '')
                                          <div id="imagePreview" style="background-image: url({{ $product['data']['p_img_url'] }});">
                                            </div>
                                          @else
                                            <?php $img= url('')."/public/assets/images/dummy-img.png"; ?>
                                          <div id="imagePreview" style="background-image: url(<?php echo $img ?>);">
                                            </div>
                                          @endif
                                    </div>
                                </div>
                                <!-- For image Preview  -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" onkeyup="Validatename(this);" id="fullname" class="form-control" name="pname" value="<?php
                                         if( isset($product['data']['pname'])  && $product['data']['pname']!= ''){
                                                echo $product['data']['pname'];
                                             }
                                        ?>"> 
                                         @if($errors->has('pname'))
                                        <p class="text-danger">{{$errors->first('pname')}}</p>
                                        @endif
                                        <span id="namewarning" class="warning_message">Please enter valid medicine name</span>
                                        <label class="form-label">Enter Medicine Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="p_title" class="form-control" value="<?php
                                         if( isset($product['data']['p_title'])  && $product['data']['p_title']!= ''){
                                        echo $product['data']['p_title'];
                                        }
                                        ?>" required>
                                        <label class="form-label">Enter Medicine Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="p_description" onkeyup="Validateaddress(this.value);"  id="address" class="form-control" value="<?php
                                         if( isset($product['data']['p_description'])  && $product['data']['p_description']!= ''){
                                        echo $product['data']['p_description'];
                                        }
                                        ?>">
                                        <span id="addresswarning" class="warning_message">Please enter valid Medicine description</span>
                                        <label class="form-label">Enter Medicine Description</label>
                                    </div>
                                </div>
                                <input type="hidden" name="p_id" value="<?php
                                        if( isset($product['data']['p_id'])  && $product['data']['p_id']!= ''){
                                        echo $product['data']['p_id'];
                                        }
                                        ?>">
                                <div class="row">
                                  <div class="col-md-6">
                                    <p><b>Select medicine category</b></p>
                                    <div class="form-group default-select select2Style">
                                        <select  name="cat_id" class="form-control select2" data-placeholder="Select" required>
                                            <option value="">Select</option>
                                           @foreach ($product['catlist'] as $row) 
                                            <option value="{{ $row['cat_id'] }}"
                                            <?php
                                         if( isset($product['data']['cat_id'])  &&  $product['data']['cat_id'] == $row['cat_id'] ){
                                                echo "selected";
                                        }
                                        ?>

                                            >{{ $row['cat_name'] }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <br/>
                                    
                                    <label>
                                            <input class="with-gap" name="p_status" type="radio" value="0" 
                                            <?php
                                             if( (isset($product['data']['p_status'])) && ($product['data']['p_status'] == '0') ){
                                                    echo "checked";
                                            }
                                            ?>
                                            />
                                         <span>Inactive</span>
                                    </label>
                                    <?php
                                        if( isset($product['data']['p_id'])  && $product['data']['p_id']!= ''){ ?>
                                            <label>
                                                <input class="with-gap" name="p_status" type="radio" value="1" 
                                                <?php
                                                 if( (isset($product['data']['p_status'])) && ($product['data']['p_status'] == '1') ){
                                                        echo "checked";
                                                }
                                                ?>
                                                 />
                                                <span>Active</span>
                                            </label>
                                       <?php }else{ ?>

                                           <label>
                                            <input class="with-gap" name="p_status" type="radio" value="1" checked />
                                                 <span>Active</span>
                                            </label> 
                                       <?php }?>
                                </div>
                            </div>
                                
                                <button class="btn btn-primary waves-effect ticketbtn" type="submit">
                                   
                                   <?php
                                        if( isset($product['data']['p_id'])  && $product['data']['p_id']!= ''){
                                        echo "Update";
                                        }
                                        else{
                                            echo "Submit";
                                        }
                                        ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
  </script>
@endsection