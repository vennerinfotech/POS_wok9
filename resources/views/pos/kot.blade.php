@extends('layouts.app')

@section('content')

<livewire:pos.pos orderDetail="{{ $showOrderDetail }}" :$orderID :key="$orderID" :orderType="$orderType">
    
@endsection