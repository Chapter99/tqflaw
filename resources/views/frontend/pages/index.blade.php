@extends('frontend.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        {!! Session::get('success') !!}
        <h2 class="display-4 head-title">มคอ.3</h2>
        <div class="p-0 card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">อันดับ</th>
                        <th style="width: 5%">
                            รหัสวิชา
                        </th>
                        <th style="width: 20%">
                            ชื่อวิชา
                        </th>
                        <th style="width: 10%">
                            ระดับชั้น
                        </th>
                        <th style="width: 10%">
                            ภาคเรียนที่
                        </th>
                        <th style="width: 10%">
                            ปีการศึกษา
                        </th>
                        <th style="width: 10%">
                            มคอ.3
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
                        --}}
                        <td>
                            <a target="_blank" rel="noopener noreferrer"
                                href="{{asset('assets/images/tqf3s')}}/{{$tqf->link_tqf3}}">{{  $tqf->link_tqf3  }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3" style="padding-left: 40%;">{{ $tqfs->links() }}</div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <p>ระบบสารสนเทศ มคอ.3 คณะนิติศาสตร์ มหาวิทยาลัยทักษิณ</p>
</div>
@endsection