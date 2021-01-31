@extends('master')
@section("content")
    <h1>Admin Page</h1><br>
    <h2>Hello,{{session('user')->username}}</h2><br>
    <a href="/logout">Logout</a><br><br>
    <a href="/addproduct">Add Product</a>
    <br><br>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Subtitle</td>
            <td>Image</td>
            <td>Operation</td>
            
        </tr>
        @foreach($products as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item['subtitle']}}</td>
                <td><img src="{{ asset('uploads/products/' . $item->gallery) }}"  /></td>
                <td>
                    <a href={{"edit/".$item['id']}}> Edit </a><br>
                    <a href={{"delete/".$item['id']}}> Delete </a>
                </td>
                
            </tr>
        @endforeach

        
    </table>
    <br><br>
    <a href="/logout">Logout</a>


    
@endsection