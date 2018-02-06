@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">


                    <div class="fix-8-12 text-black toCenter">
                        <h1 class="ae-1"><strong>Kategorien verwalten</strong></h1>
                    </div>

                <div class="col-md-6">
                    <div class="name-67 ae-1">

                        <div class="width-4 margin-bottom-4 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Kategorie</strong></h2>
                            <p class="light micro">Bitte tragen Sie ihre Kategorie ein.</p>
                        </div>


                            @include('admin.flash_msg')

                            {{ Form::open(['class' => 'form-horizontal', 'files' => true]) }}

                            <div class="row col-md-12">
                                <div class="form-group {{ $errors->has('category_name')? 'has-error':'' }}">
                                    <label for="category_name" class="control-label">Kategorie Name</label>
                                    <input type="text" class="form-control" id="category_name" value="{{ old('category_name') }}" name="category_name" placeholder="Neue Kategorie">
                                    {!! $errors->has('category_name')? '<p class="help-block">'.$errors->first('category_name').'</p>':'' !!}
                                </div>
                            </div>

                            <button type="submit" id="settings_save_btn" class="ac-ln-button-2">Einstellungen speichern</button>
                            {!! Form::close() !!}


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="name-67 ae-1">

                        <div class="width-4 margin-bottom-4 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Kategorie</strong></h2>
                            <p class="light micro">Bitte löschen oder bearbeiten Sie hier.</p>
                        </div>

                            @if($categories->count())

                                <table class="table table-bordered categories-lists">
                                    <tr class="left">
                                        <th>Kategorie Name</th>
                                        <th>Aktionen</th>
                                    </tr>
                                    @foreach($categories as $category)
                                        <tr class="left">
                                            <td> {{ $category->category_name }}  </td>
                                            <td>
                                                <a href="{{ route('edit_categories', $category->id) }}" class="text-orange"><i class="material-icons">build</i> </a>
                                                <a href="javascript:;" class="text-red btn-danger" data-id="{{ $category->id }}"><i class="material-icons">pan_tool</i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                @endif
                    </div>
                </div>
        </div>
    </div>
        </div>
    </section>
@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $('.btn-danger').on('click', function (e) {
                if (!confirm("Are you sure? its can't be undone")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var data_id = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete_categories') }}',
                    data: {data_id: data_id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                        }
                    }
                });
            });
        });
    </script>
@endsection