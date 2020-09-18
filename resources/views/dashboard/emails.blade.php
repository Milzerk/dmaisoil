@extends('dashboard.layouts.master')
@section('nav.title')
    Email
@endsection
@section('nav.emails')
    active
@endsection

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title">Email</h4>
        </div>
        <div class="content">
            <div class="content" style="height: max-content;">
                <form method="post" >
                    <label>para</label>
                    <input type="text" name="brand"  class="form-control" placeholder="destinatários" >    
                    <label>Assunto</label>
                    <input type="text" name="brand"  class="form-control" placeholder="Assunto" >                    
                    <div class="form-group">
                        <label>Email</label>
                        <textarea style="height: 400px;" id="mytextarea" class="form-control" placeholder="Digite seu email aqui!"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#mytextarea',
    });
    </script>
@endsection