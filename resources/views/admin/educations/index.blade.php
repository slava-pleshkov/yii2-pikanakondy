@extends('admin.layouts.main')

@section('title',__('admin.educations-title'))

@section('content')
    <div class="row justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-lg-9">
            <div class="d-flex">
                <h1 class="h2">@yield('title')</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="pull-right">
                <a class="btn btn-original" href="{{ route('educations.create') }}">{{ __('admin.create-educations') }}</a>
            </div>
        </div>
    </div>
    @include('admin.includes.success')
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th scope="col">{{ __('admin.educations-id') }}</th>
                <th scope="col">{{ __('admin.educations-title-en') }}</th>
                <th scope="col">{{ __('admin.educations-text-en') }}</th>
                <th scope="col">{{ __('admin.educations-time-en') }}</th>
                <th scope="col">{{ __('admin.status') }}</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($main as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td scope="row">{{ $item->titleen }}</td>
                    <td scope="row">{{ $item->texten }}</td>
                    <td scope="row">{{ $item->timeen }}</td>
                    <td scope="row">
                        @if($item->status)
                            {{ __('admin.enabled') }}
                        @else
                            {{ __('admin.disabled') }}
                        @endif
                    </td>
                    <td scope="row">
                        <a href="{{ route('educations.show',$item->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('educations.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('educations.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection