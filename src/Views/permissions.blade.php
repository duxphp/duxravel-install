@extends('vendor/duxphp/duxravel-installer/src/Views/layouts.master')

@section('template_title')
    {{ trans('duxinstall::lang.permissions.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-key fa-fw" aria-hidden="true"></i>
    {{ trans('duxinstall::lang.permissions.title') }}
@endsection

@section('container')

    <div class="bg-white border border-gray-300 mb-2">
        <dl>
            @foreach($permissions['permissions'] as $permission)
                <div class="border-b border-gray-400 px-4 py-5 flex">
                    <dt class="text-sm font-medium text-gray-600 flex-grow">
                        {{ $permission['folder'] }}
                    </dt>
                    <dd class=" text-sm text-gray-900 flex-none {{ $permission['isSet'] ? 'text-green-900' : 'text-red-900' }}">
                        <i class="fa fa-fw fa-{{ $permission['isSet'] ? 'check-circle' : 'exclamation-circle' }} row-icon"
                           aria-hidden="true"></i>
                        {{ $permission['permission'] }}
                    </dd>
                </div>
            @endforeach

        </dl>
    </div>



    @if ( ! isset($permissions['errors']))
        <div class="py-8 text-right">
            <a href="{{ route('DuxravelInstaller::environment') }}" class="btn-blue">
                {{ trans('duxinstall::lang.permissions.next') }}
                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    @endif

@endsection
