@extends('layout.master')

@section('button')
<a class="btn btn-primary" href="{{ route('users.create') }}"><b>+Add</b></a>
@endsection

@section('content')
<tbody>
    @php
        $number = 1;
    @endphp
		{{-- //di foreach dari $users['data'] karna biasanya response dari API itu di bungkus dalam index 'data' --}}
    @forelse($users['data'] as $user)
    <tr>
        <td>{{ $number++ }}</td>
        <td>{{ $user['firstName'] }}</td>
        <td>{{ $user['lastName'] }}</td>
        <td align="center">
            <form method="POST" action="{{ 'users/'.$user['id'] }}">
                @method('DELETE')
                @csrf
            
                <a href="{{ 'users/'.$user['id'] }}" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                <button type="submit" class="text-danger btn btn-link" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>

    </tr>
    @empty
        <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
    @endforelse
</tbody>
@endsection