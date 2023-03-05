
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-dark alert-dismisible fade show" role="alert">
                                <strong>Revise los campos</strong>
                                @foreach($errors->all() as $error)
                                <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">$times;</span>
                                </button>
                            </div>
                            @endif

                            {!! Form::model(array($user, ['method'=> 'PUT', 'route'=>['usuarios.update', $user->id] ])) !!}
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-grup">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('name', $user->name, array('class'=>'form-control')) !!}

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-grup">
                                        <label for="email">E-mail</label>
                                        {!! Form::text('email', $user->email, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-grup">
                                        <label for="password">Password</label>
                                        {!! Form::password('password', array('class'=>'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-grup">
                                        <label for="confirm-password">Confirmar password</label>
                                        {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-grup">
                                        <label for="">Roles</label>
                                        {!! Form::select('roles[]', $roles, $userRole, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

