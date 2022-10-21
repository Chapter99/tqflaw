@extends('backend.layouts.default_layout')
@section('title') มคอ.3 มคอ.5 @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1>รายวิชา มคอ.3,มคอ.5</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('backend/tqfs')}}">รายวิชา มคอ.3,มคอ.5</a></li>

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
                <a name="" id="" class="btn btn-success" href="{{ route('tqfs.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มรายวิชา มคอ.3 และ มคอ.5
                </a>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="p-0 card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 15%">
                            รหัสวิชา
                        </th>
                        <th style="width: 15%">
                            ชื่อวิชา
                        </th>
                        <th style="width: 5%">
                            ระดับชั้น
                        </th>
                        <th style="width: 10%">
                            ภาคเรียนที่
                        </th>
                        <th style="width: 10%">
                            ปีการศึกษา
                        </th>
                        <th style="width: 5%">
                            มคอ.3
                        </th>
                        <th style="width: 5%">
                            มคอ.5
                        </th>
                        <td style="width: 1%">
                            อนุมัติ
                        </td>
                        </th>
                        <th class="text-right">
                            แก้ไข/ลบ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tqfs as $tqf)
                    <tr>
                        <td>
                            {{ ++$i }}
                        </td>
                        <td>
                            <a>
                                {{  $tqf->course_id  }}
                            </a>
                            <br />
                            <small>
                                วันที่ส่ง {{  $tqf->created_at  }}
                            </small>
                        </td>
                        <td> <a>
                            {{  $tqf->tqf_relate->course_name  }}
                        </a>
                        <br />
                        <small>
                            ผู้สอน : {{  $tqf->teacher_name  }}
                        </small>

                    </td>
                        <td> {{  $tqf->level  }}</td>
                        <td> {{  $tqf->term  }}</td>
                        <td> {{  $tqf->nyear  }}</td>
                        {{-- <td> <a href="{{asset('assets/images/tqf3s')}}/{{$tqf->link_tqf3}}">{{  $tqf->link_tqf3  }}</a>
                        </td>
                        <td> <a href="{{asset('assets/images/tqf5s')}}/{{$tqf->link_tqf5}}">{{  $tqf->link_tqf5  }}</a>
                        </td> --}}
                        <td>
                            <a target="_blank" rel="noopener noreferrer"
                                href="{{asset('assets/images/tqf3s')}}/{{$tqf->link_tqf3}}">{{  $tqf->link_tqf3  }}</a>
                        </td>
                        <td>
                            <a target="_blank" rel="noopener noreferrer"
                                href="{{asset('assets/images/tqf5s')}}/{{$tqf->link_tqf5}}">{{  $tqf->link_tqf5  }}</a>
                        </td>
                        <td>{!! config('global.tqf_status')[$tqf->status] !!}</td>
                        <td class="text-right project-actions">

                            <form action="{{route('tqfs.destroy', $tqf->id) }}" method="POST">
                                @csrf
                                {{-- <a class="btn btn-primary btn-sm" href="{{route('tqfs.show', $tqf->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                เปิดดู
                                </a> --}}
                                <a class="btn btn-info btn-sm" href="{{route('tqfs.edit', $tqf->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    แก้ไข
                                </a>

                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('ต้องการลบรายการนี้หรือไม่')">
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
            <div class="mt-3" style="padding-left: 40%;">{{ $tqfs->links() }}</div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection