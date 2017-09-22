@extends('layouts.front')
@section('content')
<section class="p-t-lg p-y-md">
    <div class="container">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $description }}</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Days</th>
                        <th>User Type</th>
                        <th>Sessions</th>
                    </tr>
                @foreach($analytics as $key => $item)
                    <tr>
                        <td >{{ $key  }}</td>
                        <td>New Visitor</td>
                        <td>{{ $item[0]['visitors'] }}</td>
                    </tr>
                @endforeach
                </table> 
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</section>
@endsection