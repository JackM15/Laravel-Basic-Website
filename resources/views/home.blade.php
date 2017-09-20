@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Ullamco sunt sint Lorem aute occaecat enim reprehenderit eu sunt sint non dolore ex minim.Veniam voluptate et id nulla ut mollit in anim velit ex velit. Ipsum duis officia laboris nisi ut enim irure ullamco veniam deserunt esse ullamco. Tempor proident exercitation exercitation velit minim. Labore ut dolore elit pariatur cupidatat minim proident incididunt elit reprehenderit officia ad ullamco reprehenderit. Pariatur pariatur occaecat non enim laboris proident officia exercitation deserunt.</p>   
@endsection

@section('sidebar')
    <!-- apend + include parent -->
    @parent
    <p>This is appended to the sidebar</p>
@endsection