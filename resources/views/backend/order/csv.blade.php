{{-- @php
echo "
<pre>";
print_r($users)
@endphp --}}

<table>
    <th>
        <tr>Name</tr>
        <tr>Email</tr>
        <tr>Phone</tr>
    </th>
    <tbody>
        @foreach ($users as $u)
        <tr>{{ $u->name }}</tr>
        @endforeach
    </tbody>
</table>