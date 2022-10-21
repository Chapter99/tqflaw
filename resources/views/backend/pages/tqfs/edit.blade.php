@extends('backend.layouts.default_layout')
@section('title') แก้ไขข้อมูล มคอ.3 และ มคอ.5 @parent @endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1>แก้ไข มคอ.3 และ มคอ.5</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('tqfs.index') }}">รายวิชา มคอ.3,มคอ.5</a></li>
            <li class="breadcrumb-item active">แก้ไขข้อมูล</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    {!! Session::get('status') !!}

    <!-- Default box -->
    @if($message = Session::get('success'))
    <div class="text-center alert alert-success">
      {{ $message }}
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">แก้ไขรายการ</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="p-0 card-body">
        <form role="form" method="post" action="{{ route('tqfs.update',$tqf->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="card-body">

                  <div class="row">
                      <div class="col-md-10">
                         <div class="form-group">
                             <label for="course_id">รหัสวิชา</label>
                             <input type="text" class="form-control" id="course_id" name="course_id" placeholder="ป้อนรหัสวิชา" value="{{$tqf->course_id}}">
                          </div>     
                            
                           <div class="form-group">
                             <label for="level">ระดับชั้น</label>
                             <select class="custom-select" name="level" id="level">
                               <option value="1" @if($tqf->level == 1) selected @endif>ชั้นปีที่ 1</option>
                               <option value="2" @if($tqf->level == 2) selected @endif>ชั้นปีที่ 2</option>
                               <option value="3" @if($tqf->level == 3) selected @endif>ชั้นปีที่ 3</option>
                               <option value="3" @if($tqf->level == 4) selected @endif>ชั้นปีที่ 4</option>
                             </select>
                           </div>

                           <div class="form-group">
                            <label for="term">ภาคเรียนที่</label>
                            <select class="custom-select" name="term" id="term">
                              <option value="1" @if($tqf->term == 1) selected @endif>ภาคเรียนที่ 1</option>
                              <option value="2" @if($tqf->term == 2) selected @endif>ภาคเรียนที่ 2</option>
                              <option value="3" @if($tqf->term == 3) selected @endif>ภาคเรียนที่ 3</option>                              
                            </select>
                           </div>

                           <div class="form-group">
                            <label for="nyear">ปีการศึกษา</label>
                            <select class="custom-select" name="nyear" id="nyear">
                              <option value="2564" @if($tqf->nyear == 2564) selected @endif>ปีการศึกษา 2564</option>
                              <option value="2563" @if($tqf->nyear == 2563) selected @endif>ปีการศึกษา 2563</option>
                              <option value="2562" @if($tqf->nyear == 2562) selected @endif>ปีการศึกษา 2562</option>                              
                            </select>
                           </div>

                          <div class="form-group">
                            <p><label for="link_tqf3">แนบไฟล์ มคอ.3</label></p>
                            <input type="file" name="link_tqf3" id="link_tqf3">
                          </div>

                          <div class="form-group">
                            <p><label for="link_tqf5">แนบไฟล์ มคอ.5</label></p>
                            <input type="file" name="link_tqf3" id="link_tqf5">
                          </div>
 
                        </div>  
                      
                    </div>
 
                </div>                    
                     <div class="col-md-2">
                        {{-- <div class="form-group">
                                <label for="product_image">ภาพสินค้า</label>
                                <img src="{{asset('assets/images/noImg.jpg')}}" id="output" class="rounded img-fluid ">
                                <span class="btn btn-primary btn-file">
                                    เลือกไฟล์ <input type="file" name="product_image" id="product_image" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                </span>
                                <p class="label-uppic">เลือกภาพสินค้า</p>
                          </div> --}}
                    </div>
                
                     <!-- /.card-body -->

                <div class="text-center card-footer">
                  <button type="submit" class="btn btn-primary">บันทึกรายการ</button>
                </div>
          </form>
        </div>
    
  </section>



@endsection