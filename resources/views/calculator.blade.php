@extends('layout.master')
@section('pageTitle', 'Calculator App')
@section('content')



    <h2>Simple Online Calculator</h2>
    {!! Form::open(array('url'=> '/getResult')) !!}
    <table>
        <tr>
            <td>
                {!! Form::label('num1', 'First Number') !!}
            </td>
            <td>
                {!! Form::text('num1') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('operation', 'Select the operation') !!}
            </td>
            <td>
                {!! Form::select('operation', array('Addiction' => 'Addiction', 'Subtraction' => 'Subtraction', 'Multiplication'=>'Multiplication', 'Division'=>'Division'), 'Addiction') !!}
             </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('num2', 'Second Number') !!}
            </td>
            <td>
                {!! Form::text('num2') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::token() !!}
                {!! Form::submit('Calculate') !!}
            </td>
        </tr>
    </table>
    {!! Form::close() !!}
@if(isset($Result) )
<div>
    <h2>{{$Result}} </h2>
</div>
@endif
@endsection
