@extends('welcome')

@section('content')

    <form method="post" enctype="multipart/form-data" action="{{ action('ClientController@postIndex') }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="from">From:</label>
                <input type="date" id="from" name="from" value="{{ $from }}"><br><br>
            </div>
            <div class="col-md-4">
                <label for="to">To:</label>
                <input type="date" id="to" name="to" value="{{ $to }}"><br><br>
            </div>
            <div class="col-md-4">
                <br>
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>

    <table>
        <thead>
        <tr>
            <th> id </th>
            <th> name </th>
            <th> surname  </th>
            <th> last payment amount  </th>
            <th> last payment date  </th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td> {{ $client->id }} </td>
                <td> {{ $client->name }} </td>
                <td> {{ $client->surname }} </td>
                <td> {{ $client->latestPayment['amount'] }} </td>
                <td> {{ $client->latestPayment['created_at'] }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

