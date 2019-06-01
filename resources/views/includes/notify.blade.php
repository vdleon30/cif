@if(session('message_info'))
    <div class="notify-container">
        <div class="notify-container-wrapper">
            <div class="notify-item notify-info">
                <div class="notify-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="notify-message">
                    <div class="notify-item-title">Información:</div>
                    {{session('message_info')}}
                </div>
                <div class="notify-close">
                    Cerrar
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('message_success'))
    <div class="notify-container">
        <div class="notify-container-wrapper">
            <div class="notify-item notify-success">
                <div class="notify-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="notify-message">
                    <div class="notify-item-title">¡Excelente!</div>
                    {{session('message_success')}}
                </div>
                <div class="notify-close">
                    Cerrar
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('message_warning'))
    <div class="notify-container">
        <div class="notify-container-wrapper">
            <div class="notify-item notify-warning">
                <div class="notify-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="notify-message">
                    <div class="notify-item-title">Aviso:</div>
                    {{session('message_warning')}}
                </div>
                <div class="notify-close">
                    Cerrar
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('message_error'))
    <div class="notify-container">
        <div class="notify-container-wrapper">
            <div class="notify-item notify-error">
                <div class="notify-icon">
                    <i class="fas fa-frown-open"></i>
                </div>
                <div class="notify-message">
                    <div class="notify-item-title">Error:</div>
                    {{session('message_error')}}
                </div>
                <div class="notify-close">
                    Cerrar
                </div>
            </div>
        </div>
    </div>
@endif
@if(isset($errors) && $errors->any())
    @foreach ($errors->all() as $error)
        <div class="notify-container">
            <div class="notify-container-wrapper">
                <div class="notify-item notify-error">
                    <div class="notify-icon">
                        <i class="fas fa-frown-open"></i>
                    </div>
                    <div class="notify-message">
                        <div class="notify-item-title">Error:</div>
                        {{$error}}
                    </div>
                    <div class="notify-close">
                        Cerrar
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif