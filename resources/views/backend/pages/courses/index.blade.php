@extends('backend.layouts.default_layout')
@section('title') รายวิชา @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1>ข้อมูลหลักรายวิชาทั้งหมด</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('backend/courses')}}">รายวิชา</a></li>
            <li class="breadcrumb-item active">Course</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

        {!! Session::get('success') !!}

        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a name="" id="" class="btn btn-success" href="{{ route('courses.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มรายวิชาใหม่
                </a>
            </h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="p-0 card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">
                            รหัสวิชา
                        </th>
                        <th style="width: 20%">
                            ชื่อวิชา
                        </th>
                        <th style="width: 20%">
                            ชื่อวิชาภาษาอังกฤษ
                        </th>
                        <th style="width: 1%" class="text-right">
                            หน่วยกิต
                        </th><th class="text-right">
                            แก้ไข/ลบ
                        </th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>
                            {{ ++$i }}
                        </td>
                        <td>
                            <a>
                               {{  $course->course_id  }}
                            </a>
                            <br/>
                            <small>
                                Created {{  $course->created_at  }}
                            </small>
                        </td>
                        <td> {{  $course->course_name  }}</td>
                        <td> {{  $course->name_eng  }}</td>
                        <td> {{  $course->degree  }}</td>

                        <td class="text-right project-actions">

                            <form action="{{route('courses.destroy', $course->id) }}" method="POST">
                                @csrf
                                {{-- <a class="btn btn-primary btn-sm" href="{{route('courses.show', $course->id)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    เปิดดู
                                </a> --}}
                                <a class="btn btn-info btn-sm" href="{{route('courses.edit', $course->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    แก้ไข
                                </a>

                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบรายการนี้หรือไม่')">
                                    <i class="fas fa-trash">
                                    </i>
                                    ลบ
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-3" style="padding-left: 40%;">{{ $courses->links() }}</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->

  </section>
  @endsection