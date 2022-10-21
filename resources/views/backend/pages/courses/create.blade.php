@extends('backend.layouts.default_layout')
@section('title') เพิ่มรายวิชา @parent @endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1>รายวิชา</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">รายวิชาทั้งหมด</a></li>
            <li class="breadcrumb-item active">เพิ่มรายวิชา</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    {!! Session::get('status') !!}

    <!-- ตรวจสอบการบันทึกข้อมูลผ่าน -->
    @if($message = Session::get('success'))
    <div class="text-center alert alert-success">
      {{ $message }}
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">เพิ่มรายวิชาใหม่</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="p-0 card-body">
        <form role="form" method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                            <label for="course_id">รหัสวิชา</label>
                            <input type="text" class="form-control {{ $errors->has('course_id') ? 'is-invalid' :'' }}" id="course_id" name="course_id" placeholder="ป้อนรหัสวิชา" value="{{old('course_id')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('course_id') }}</small></span>
                          </div>
                          {{-- <div class="form-group">
                             <p><label for="category_attachment">ไฟล์แนบ</label></p>
                             <input type="file" name="category_attachment" id="category_attachment">
                          </div> --}}
                          <div class="form-group">
                            <label for="course_name">ชื่อวิชา</label>
                            <input type="text" class="form-control {{ $errors->has('course_name') ? 'is-invalid' :'' }}" id="course_name" name="course_name" placeholder="ป้อนชื่อวิชาภาษาไทย" value="{{old('course_name')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('course_name') }}</small></span>
                          </div>
                          <div class="form-group">
                            <label for="name_eng">ชื่อวิชาภาษาอังกฤษ</label>
                            <input type="text" class="form-control {{ $errors->has('name_eng') ? 'is-invalid' :'' }}" id="name_eng" name="name_eng" placeholder="ป้อนชื่อวิชาภาษาอังกฤษ" value="{{old('name_eng')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('name_eng') }}</small></span>
                          </div>
                          <div class="form-group">
                            <label for="degree">หน่วยกิต</label>
                            <input type="text" class="form-control {{ $errors->has('degree') ? 'is-invalid' :'' }}" id="degree" name="degree" placeholder="ป้อนหน่วยกิต" value="{{old('degree')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('degree') }}</small></span>
                          </div>
                     </div>
                 </div>

                </div>
                <!-- /.card-body -->

                <div class="text-center card-footer">
                  <button type="submit" class="btn btn-primary">บันทึกรายการ</button>
                </div>
              </form>
        </div>
    </div>
  </section>



@endsection