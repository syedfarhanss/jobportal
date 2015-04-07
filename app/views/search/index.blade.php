{{ Form::open(['action' => ['SearchController@jobSearch'], 'method' => 'GET']) }}
    {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name'])}}
    {{ Form::submit('Search', array('class' => 'button expand')) }}
    {{ HTML::script('js/script.js') }}
{{ Form::close() }}

