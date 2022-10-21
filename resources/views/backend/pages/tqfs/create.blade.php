@extends('backend.layouts.default_layout')
@section('title') เพิ่มรายวิชา มอค.3 และ มคอ.5 @parent @endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1>รายวิชา มคอ.3 และ มคอ.5</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('tqfs.index') }}">รายวิชา มคอ. ทั้งหมด</a></li>
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
        <form role="form" method="post" action="{{ route('tqfs.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                        {{-- <div class="form-group">
                            <label for="course_id">รหัสวิชา</label>
                            <input type="text" class="form-control {{ $errors->has('course_id') ? 'is-invalid' :'' }}" id="course_id" name="course_id" placeholder="ป้อนรหัสวิชา" value="{{old('course_id')}}">
                            <span class="help-block text-danger"><small>{{ $errors->first('course_id') }}</small></span>
                        </div> --}}
                        <select class="form-control @error('course_id') is-invalid @enderror" name="course_id">
                          {{-- <option value="">--- โปรดระบุ ---</option> --}}
                          @foreach ($coures as $course_id)
                              <option value="{{ $course_id->course_id }}" selected>{{ $course_id->course_id.' '.$course_id->course_name }}</option>
                          @endforeach
                          </select>                          
                          <div class="form-group">
                            <label for="teacher_name">ชื่อผู้สอน</label>
                            <input type="text" class="form-control {{ $errors->has('teacher_name') ? 'is-invalid' :'' }}" id="teacher_name" name="teacher_name" placeholder="ป้อนชื่อผู้สอน" value="{{ Auth::user()->fullname }}">
                            <span class="help-block text-danger"><small>{{ $errors->first('teacher_name') }}</small></span>
                          </div>
                          <div class="form-group">
                            <label for="level">ระดับชั้น</label>
                            <select class="custom-select" name="level" id="level">
                                <option value="1">ชั้นปีที่ 1</option>
                                <option value="2">ชั้นปีที่ 2</option>
                                <option value="3">ชั้นปีที่ 3</option>
                                <option value="4">ชั้นปีที่ 4</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="term">ภาคเรียนที่</label>
                            <select class="custom-select" name="term" id="term">
                                <option value="1">ภาคเรียนที่ 1</option>
                                <option value="2">ภาคเรียนที่ 2</option>
                                <option value="3">ภาคเรียนที่ 3</option>                                
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="nyear">ภาคเรียนที่</label>
                            <select class="custom-select" name="nyear" id="nyear">
                                <option value="2564">2564</option>
                                <option value="2563">2563</option>
                                <option value="2562">2562</option>                                
                              </select>
                          </div>                          
                          <div class="form-group">
                            <p><label for="link_tqf3">แนบไฟล์ มคอ.3</label></p>
                            <input type="file" name="link_tqf3" id="link_tqf3">
                         </div>
                         <div class="form-group">
                            <p><label for="link_tqf5">แนบไฟล์ มคอ.5</label></p>
                            <input type="file" name="link_tqf5" id="link_tqf5">
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