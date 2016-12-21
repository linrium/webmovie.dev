@extends('admin.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Seasons manager</h1>
            @include('admin.component.alert')
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-success" href="{!! route('season.create') !!}">Create Season</a>
                </div>
                <div class="panel-body">
                    <h3>{{ $data->total() }} seasons</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Season</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php $stt = 0; ?>
                            @foreach($data as $item)
                                <?php $stt = $stt + 1; ?>
                                <tr>
                                    <th>{!! $stt !!}</th>
                                    <td>{!! $item['name'] !!}</td>
                                    <td>
                                        <a class="btn btn-default" href="{!! URL::route('season.edit', $item['id']) !!}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-default" href="{!! URL::route('season.show', $item['id']) !!}">View</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('season.destroy', $item['id']) }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                                            <button type="submit" class="btn btn-error" onlick="return false">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
@endsection()