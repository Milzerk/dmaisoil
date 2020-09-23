@extends('dashboard.layouts.master')
@section('nav.title')
    Email
@endsection
@section('nav.emails')
    active
@endsection
@section('style')
    <link href="{{ asset('froala/css/froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css" />
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
                    <input type="text" name="brand"  class="form-control" placeholder="titulo" >                    
                    <div class="form-group">
                        <label>Email</label>
                        <textarea id="mytextarea"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('froala/scripts/froala_editor.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('froala/scripts/languages/pt_br.js') }}"></script>

    <!-- Initialize the editor. -->
    <script>
    new FroalaEditor('#mytextarea', {
        heightMin: 300,
        heightMax: 600,
        language: 'pt_br'
    })
    </script>
@endsection