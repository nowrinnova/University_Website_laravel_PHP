<div class="container">
    <div class="row   border">
        <form action="/login" method="POST">
            <div class="col-sm-4">
                <div class="form-group ">
                    <label for="exampleInputEmail1" class="form-label">{{ $label }}</label>
                    <input type="{{ $type }}" name="{{ $name }}" class="form-control "
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
    </div>
</div>


{{-- <div class="container custom-login ">
    <div class="row-sm-6">
        <div class="form-group">
            <form action="/login" method="POST">
                <label for="">{{ $label }}</label>
                <input type="{{ $type }}" name="{{ $name }}">
            </form>
        </div>
    </div>
</div> --}}
