@component('layouts.sha')
    <!-- CUSTOM HEIGHT EXAMPLE -->
    <style>
        .pill.controller {
            font-size: 0;
            border: 1px solid;
            display: inline-block;
            border-radius: 6px;
        }
        .pill.controller li {
            padding: 10px 20px;
            display: inline-block;
            border: 1px solid #fff;
            font-size: initial;
            -webkit-transiton: 0.5s;
            transiton: 0.5s;
        }

        .pill.controller li:first-child {
            border-radius: 4px 0 0 4px;
        }
        .pill.controller li:last-child {
            border-radius: 0 4px 4px 0;
        }

        .pill.controller li.selected {
            background: #fff;
            color: #303030;
        }
        /* CUSTOM HEIGHT */
        .slider[data-slider-id="customHeight"] li {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            /* before selected */
            opacity: 0;
        }

        /* selected */
        .slider[data-slider-id="customHeight"] li.selected { opacity: 1; }

        /* arrows */
        .leftControl,
        .rightControl {
            position: absolute;
            top: 50%;
            margin-top: -35px;
            margin-left: -100px;
            cursor: pointer;
            font-size: 0;
        }

        .rightControl {
            right: 0;
            margin-right: -100px;
        }

        .leftControl svg,
        .rightControl svg {
            width: 30px;
            height: 70px;
        }

        @media screen and (max-width:1180px) {
            .leftControl,
            .rightControl {
                display:none;
            }
        }

        .background-red-pink{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>
    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12">

                        <iframe src="https://sunshinewellness.setmore.com/bookappointment" style="width:100%; height: 500px; border:none;" name="test" scrolling="yes" frameborder="0" align=aus marginheight="0" marginwidth="0"></iframe>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endcomponent

