@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreproyecto:</strong>
                            {{ $proyecto->nombreproyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Fuentefondo:</strong>
                            {{ $proyecto->fuentefondo }}
                        </div>
                        <div class="form-group">
                            <strong>Montoplanificado:</strong>
                            {{ $proyecto->montoplanificado }}
                        </div>
                        <div class="form-group">
                            <strong>Montopatrocinado:</strong>
                            {{ $proyecto->montopatrocinado }}
                        </div>
                        <div class="form-group">
                            <strong>Montofondospropios:</strong>
                            {{ $proyecto->montofondospropios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
