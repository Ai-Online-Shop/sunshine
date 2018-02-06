@extends('layouts.app')

@section('title') @if(! empty($title)) {{$title}} @endif - @parent @endsection

@section('content')


    <section class="slide autoHeight " style="background:#efefef">
        <div class="content">
            <div class="container">
                <div class="wrap">


                    <div class="material-datatables name-67">
                        <div class=" margin-bottom-4 margin-2 left fix-6-12">
                            <h2 class="ae-2"><strong>Meine Gutscheine</strong></h2>
                            <p class="light micro ae-3">Sie können jetzt noch einfacher auf die Details ihrer einzelnen
                                Gutscheine zugreifen. Drücken Sie dazu
                                auf <a class="text-ac small"><i class="material-icons font-size-14 text-ac">picture_as_pdf</i><b>Download</b></a>
                                und ihr Gutschein wird mit allen Details angezeigt. Natürlich können ihn anschließend als
                                PDF downloaden.</p>
                        </div>

                        @if($last_payments->count() > 0)
                            <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                   cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr class="left">
                                    <th>Rechnungsbetrag</th>
                                    <th>Gutschein Höhe</th>
                                    <th>Gekauft am</th>
                                    <th>Gültig bis</th>
                                    <th class="disabled-sorting">Aktionen</th>
                                </tr>
                                </thead>
                                <tbody>@foreach($last_payments as $payment)

                                    <tr class="left">
                                        <td>{{get_amount($payment->amount)}}</td>

                                        <td>{{get_amount($payment->gutschein)}}</td>

                                        <td><span data-toggle="tooltip"
                                                  title="{{$payment->created_at->format('d F, Y h:i a')}}">{{$payment->created_at->format('d F, Y')}}</span>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip"
                                                  title="{{$payment->created_at->addYears(2)->format('d F, Y h:i a')}}">{{$payment->created_at->addYears(2)->format('d F, Y')}}</span>
                                        </td>
                                        <td><a href="{{route('payment_view', $payment->id)}}" class="text-ac small"><i
                                                        class="material-icons font-size-14 text-ac">picture_as_pdf</i><b>Download</b></a>
                                        </td>
                                        @endforeach

                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <p class="text-black micro fix-6-12 left">!!! Es ist noch kein Gutschein
                                bestätigt worden.
                                Kontaktiere uns, falls dein Gutschein nicht innerhalb von 3 Tagen bestätigt
                                wurde. !!!</p>
                        @endif

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

        </div>
        </div>
        </div>
    </section>

@endsection

@section('page-js')
    <script>
        /*!
         * jquery.counterup.js 1.0
         *
         * Copyright 2013, Benjamin Intal http://gambit.ph
         * Released under the GPL v2 License
         *
         * Date: Nov 26, 2013
         */
        (function ($) {
            "use strict";

            $.fn.counterUp = function (options) {

                // Defaults
                var settings = $.extend({
                    'time': 1200,
                    'delay': 10
                }, options);

                return this.each(function () {

                    // Store the object
                    var $this = $(this);
                    var $settings = settings;

                    var counterUpper = function () {
                        var nums = [];
                        var divisions = $settings.time / $settings.delay;
                        var num = $this.text();
                        var isComma = /[0-9]+,[0-9]+/.test(num);
                        num = num.replace(/,/g, '');
                        var isInt = /^[0-9]+$/.test(num);
                        var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
                        var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

                        // Generate list of incremental numbers to display
                        for (var i = divisions; i >= 1; i--) {

                            // Preserve as int if input was int
                            var newNum = parseInt(num / divisions * i);

                            // Preserve float if input was float
                            if (isFloat) {
                                newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                            }

                            // Preserve commas if input had commas
                            if (isComma) {
                                while (/(\d+)(\d{3})/.test(newNum.toString())) {
                                    newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                                }
                            }

                            nums.unshift(newNum);
                        }

                        $this.data('counterup-nums', nums);
                        $this.text('0');

                        // Updates the number until we're done
                        var f = function () {
                            $this.text($this.data('counterup-nums').shift());
                            if ($this.data('counterup-nums').length) {
                                setTimeout($this.data('counterup-func'), $settings.delay);
                            } else {
                                delete $this.data('counterup-nums');
                                $this.data('counterup-nums', null);
                                $this.data('counterup-func', null);
                            }
                        };
                        $this.data('counterup-func', f);

                        // Start the count up
                        setTimeout($this.data('counterup-func'), $settings.delay);
                    };

                    // Perform counts when the element gets into view
                    $this.waypoint(counterUpper, {offset: '100%', triggerOnce: true});
                });

            };

        })(jQuery);


        // custom code
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1900
            });
        });
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
@endsection