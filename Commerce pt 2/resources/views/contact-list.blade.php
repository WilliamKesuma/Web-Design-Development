@extends("template.main")
@section('title', 'List Contact Us')
@section('body')
<div class="row d-flex justify-content-center m-5">

  <!-- Contact Form Block -->
  <div class="col-xl-6">
    <h2 class="pb-4">List of Contact</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $k => $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->phone }}</td>
                <td>{{ $d->message }}</td>
                <td>
                    <form method="POST">
                        @csrf
                        {{-- @method('DELETE') --}}
                        <input type="hidden" name="index" value="{{ $k }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{-- @dd($data) --}}
            @if (count($data) <= 0)
            <tr>
                <td colspan="3" class="text-center">No Data</td>
            </tr>
            @endif
        </tbody>
    </table>
  </div>
</div>
@endsection
