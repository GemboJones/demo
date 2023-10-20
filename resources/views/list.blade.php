    <table border='1'>
        @foreach($members as $member)
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>School</th>
        </tr>
        <tr>
          <th>{{$member['name']}}</th>
          <th>{{$member['email']}}</th>
          <th>{{$member['school']}}</th>
        </tr>
        @endforeach
    </table>
    