@section('scripts')
@if(session()->has('success'))


    <script>
        swal("One more step!", "{!! session()->get('success') !!}", "success");
    </script>


 @endif


@if(session()->has('email'))

    <script>
        swal({
            title: "You have not activated your account",
            text: "To send the activation code again, click OK",
            type: "error",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function(){
            setTimeout(function(){

                $.get('/resend/code', {email: "{!! session()->get('email') !!}"});


                swal("The email has been sent", "Please check you inbox to activate the account", "success");
            }, 2000);
        });
    </script>


    {{--}}{!! session()->get('error') !!}--}}



@endif
@stop