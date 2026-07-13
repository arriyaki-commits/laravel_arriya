@extends('layout')

@section('title', ' เขียนบทความ')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความ</h2>
    <form method="POST">
        <div class="form-group py-2">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title" placeholder="กรอกชื่อบทความ">
        </div>
        <div class="form-group py-2">
            <label for="title" class="form-label">เนื้อหา</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>

@endsection
