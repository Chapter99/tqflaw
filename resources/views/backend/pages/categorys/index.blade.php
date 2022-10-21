@extends('backend.layouts.default_layout')
@section('title') Category @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1>หมวดหมู่สินค้า</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('backend/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categorys</li>
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
                <a name="" id="" class="btn btn-success" href="{{ route('categorys.create') }}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มหมวดหมู่ใหม่
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
                            Name
                        </th>
                        <th>Attachment</th>
                        <th style="width: 1%" class="text-right">
                            Status
                        </th>
                        <th class="text-right">
                            Manage
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorys as $category)
                    <tr>
                        <td>
                            {{ ++$i }}
                        </td>
                        <td>
                            <a>
                               {{  $category->category_name  }}
                            </a>
                            <br/>
                            <small>
                                Created {{  $category->created_at  }}
                            </small>
                        </td>
                        <td> {{  $category->category_attachment  }}</td>
                        <td> {{  $category->status  }}</td>

                        <td class="text-right project-actions">

                            <form action="{{route('categorys.destroy', $category->id) }}" method="POST">
                                @csrf
                                <a class="btn btn-primary btn-sm" href="{{route('categorys.show', $category->id)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    เปิดดู
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('categorys.edit', $category->id)}}">
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
            <div class="mt-3" style="padding-left: 40%;">{{ $categorys->links() }}</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->

  </section>
  @endsection