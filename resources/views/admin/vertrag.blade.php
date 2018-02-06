@extends('layouts.app_dashboard')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Ihre Verträge mit ImmoFound</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Datum</th>
                                        <th>Betreff</th>
                                        <th class="disabled-sorting text-right">Aktionen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>11.10.2017</td>
                                        <td>Vertrag über Investment Summe 2.500€</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-simple btn-rose btn-icon like"><i class="material-icons">picture_as_pdf</i> Herunterladen</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
        </div>
    </div>
@endsection


