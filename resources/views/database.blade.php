<html>
<h1>Ini Article Database</h1>
<h2>Alya Faizah</h2>
<table border="1">
    <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Content</th>
    <th>Image</th>
    </tr>

    @foreach($article as $ar)
    <tr>
    <td>{{$ar->id}}</td>
    <td>{{$ar->title}}</td>
    <td>{{$ar->content}}</td>
    <td>{{$ar->featured_image}}</td>
    </tr>
    @endforeach
</table>
<html>