@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showです<br>
                    氏名：{{ $contact->your_name }}<br>
                    件名：{{ $contact->title }}<br>
                    Email：{{ $contact->email }}<br>
                    URL：{{ $contact->url }}<br>
                    性別：{{ $gender }}<br>
                    年齢：{{ $age }}<br>
                    問い合わせ内容：{{ $contact->contact }}

                    <form method="GET" action="{{route('contact.edit', ['id' => $contact->id ])}}">
                    @csrf
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>

                    <form method="POST" action="{{route('contact.destroy', ['id' => $contact->id ])}}">
                    @csrf
                        <input class="btn btn-danger" type="submit" value="削除する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
