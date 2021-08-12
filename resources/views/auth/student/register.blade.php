@extends('layouts.student.auth')

@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>SIP</b>Darqom</a>
        </div>
        <div class="card-body accordion" id="register-accordion">
            <p class="login-box-msg">Daftar Akun Baru</p>
            
            <form action="{{ route('register.student') }}" method="post" class="mb-2" enctype="multipart/form-data">
                @csrf
                <div class="collapse show" id="step1" data-parent="#register-accordion">
                    @include('auth.student.partials.register-step1')
                </div>
                <div class="collapse" id="step2" data-parent="#register-accordion">
                    @include('auth.student.partials.register-step2')
                </div>
            </form>
            
            <a href="{{ route('login.student') }}" class="text-center">Saya sudah terdaftar</a>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    #register-image-label {
        width: 5rem;
        height: 6.5rem;
        border: 1px dashed #ced4da;
        border-radius: .5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-size: cover;
    }

    #register-image-label.is-invalid {
        border: 1px dashed #dc3545;
    }

    #register-image-label p {
        font-size: .8rem;
        color: #6a6f74;
        margin: 0;
    }
</style>
@endpush

@push('script')
<script>
    $('#agreeTerms').on('change', function() {
        const checked = $(this).is(':checked');
        const submitBtn = $('#register-submit-button');

        return (checked) ? submitBtn.removeAttr('disabled') : submitBtn.attr('disabled', true);
    });

    $('#register-image').on('change', function() {
        const [file] = this.files;

        if(file) {
            const url = URL.createObjectURL(file);
            $('#register-image-label').css('background-image', `url(${url})`);
        }
    });
</script>
@endpush
