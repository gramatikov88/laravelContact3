<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Laravel Contact Form</title>
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading" style="background-image: url('http://atomsolutions.net/assets/img/logo.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="dataInsert" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="input-group"><input class="input--style-1" type="text" placeholder="name" name="name" required></div>



                        <div class="input-group"><input class="input--style-1" type="text" placeholder="email" name="email" required></div>


                        <div class="input-group"><input class="input--style-1" type="text" placeholder="phone" name="phone" required></div>


                        <div class="input-group"><input class="input--style-1" type="text" placeholder="message" name="message" required></div>

                        <div class="p-t-20">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function($) {
            'use strict';
            /*==================================================================
                [ Daterangepicker ]*/
            try {
                $('.js-datepicker').daterangepicker({
                    "singleDatePicker": true,
                    "showDropdowns": true,
                    "autoUpdateInput": false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    },
                });

                var myCalendar = $('.js-datepicker');
                var isClick = 0;

                $(window).on('click', function() {
                    isClick = 0;
                });

                $(myCalendar).on('apply.daterangepicker', function(ev, picker) {
                    isClick = 0;
                    $(this).val(picker.startDate.format('DD/MM/YYYY'));

                });

                $('.js-btn-calendar').on('click', function(e) {
                    e.stopPropagation();

                    if (isClick === 1) isClick = 0;
                    else if (isClick === 0) isClick = 1;

                    if (isClick === 1) {
                        myCalendar.focus();
                    }
                });

                $(myCalendar).on('click', function(e) {
                    e.stopPropagation();
                    isClick = 1;
                });

                $('.daterangepicker').on('click', function(e) {
                    e.stopPropagation();
                });


            } catch (er) {
                console.log(er);
            }
            /*[ Select 2 Config ]
                ===========================================================*/

            try {
                var selectSimple = $('.js-select-simple');

                selectSimple.each(function() {
                    var that = $(this);
                    var selectBox = that.find('select');
                    var selectDropdown = that.find('.select-dropdown');
                    selectBox.select2({
                        dropdownParent: selectDropdown
                    });
                });

            } catch (err) {
                console.log(err);
            }


        })(jQuery);
    </script>
    <style>
        /* ==========================================================================
   #FONT
   ========================================================================== */
        .font-robo {
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
        }

        /* ==========================================================================
   #GRID
   ========================================================================== */
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .row-space {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .col-2 {
            width: -webkit-calc((100% - 60px) / 2);
            width: -moz-calc((100% - 60px) / 2);
            width: calc((100% - 60px) / 2);
        }

        @media (max-width: 767px) {
            .col-2 {
                width: 100%;
            }
        }

        /* ==========================================================================
   #BOX-SIZING
   ========================================================================== */
        /**
 * More sensible default box-sizing:
 * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
 */
        html {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            padding: 0;
            margin: 0;
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }

        /* ==========================================================================
   #RESET
   ========================================================================== */
        /**
 * A very simple reset that sits on top of Normalize.css.
 */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        blockquote,
        p,
        pre,
        dl,
        dd,
        ol,
        ul,
        figure,
        hr,
        fieldset,
        legend {
            margin: 0;
            padding: 0;
        }

        /**
 * Remove trailing margins from nested lists.
 */
        li>ol,
        li>ul {
            margin-bottom: 0;
        }

        /**
 * Remove default table spacing.
 */
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /**
 * 1. Reset Chrome and Firefox behaviour which sets a `min-width: min-content;`
 *    on fieldsets.
 */
        fieldset {
            min-width: 0;
            /* [1] */
            border: 0;
        }

        button {
            outline: none;
            background: none;
            border: none;
        }

        /* ==========================================================================
   #PAGE WRAPPER
   ========================================================================== */
        .page-wrapper {
            min-height: 100vh;
        }

        body {
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
            font-weight: 400;
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 400;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 15px;
        }

        h6 {
            font-size: 13px;
        }

        /* ==========================================================================
   #BACKGROUND
   ========================================================================== */
        .bg-blue {
            background: #2c6ed5;
        }

        /* ==========================================================================
   #SPACING
   ========================================================================== */
        .p-t-100 {
            padding-top: 100px;
        }

        .p-t-20 {
            padding-top: 20px;
        }

        .p-b-100 {
            padding-bottom: 100px;
        }

        /* ==========================================================================
   #WRAPPER
   ========================================================================== */
        .wrapper {
            margin: 0 auto;
        }

        .wrapper--w680 {
            max-width: 680px;
        }

        /* ==========================================================================
   #BUTTON
   ========================================================================== */
        .btn {
            line-height: 40px;
            display: inline-block;
            padding: 0 25px;
            cursor: pointer;
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
            color: #fff;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
            font-size: 14px;
            font-weight: 700;
        }

        .btn--radius {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .btn--green {
            background: #57b846;
        }

        .btn--green:hover {
            background: #4dae3c;
        }

        /* ==========================================================================
   #DATE PICKER
   ========================================================================== */
        td.active {
            background-color: #2c6ed5;
        }

        input[type="date"i] {
            padding: 14px;
        }

        .table-condensed td,
        .table-condensed th {
            font-size: 14px;
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
            font-weight: 400;
        }

        .daterangepicker td {
            width: 40px;
            height: 30px;
        }

        .daterangepicker {
            border: none;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            display: none;
            border: 1px solid #e0e0e0;
            margin-top: 5px;
        }

        .daterangepicker::after,
        .daterangepicker::before {
            display: none;
        }

        .daterangepicker thead tr th {
            padding: 10px 0;
        }

        .daterangepicker .table-condensed th select {
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-size: 14px;
            padding: 5px;
            outline: none;
        }

        /* ==========================================================================
   #FORM
   ========================================================================== */
        input {
            outline: none;
            margin: 0;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            width: 100%;
            font-size: 14px;
            font-family: inherit;
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
            border-bottom: 2px solid #ccc;
        }

        .input-icon {
            position: absolute;
            font-size: 18px;
            color: #ccc;
            right: 8px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
        }

        .input--style-1 {
            padding: 9px 0;
            color: #666;
        }

        .input--style-1::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #555;
        }

        .input--style-1:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #555;
            opacity: 1;
        }

        .input--style-1::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #555;
            opacity: 1;
        }

        .input--style-1:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #555;
        }

        .input--style-1:-ms-input-placeholder {
            /* Microsoft Edge */
            color: #555;
        }

        /* ==========================================================================
   #SELECT2
   ========================================================================== */
        .select--no-search .select2-search {
            display: none !important;
        }

        .rs-select2 .select2-container {
            width: 100% !important;
            outline: none;
        }

        .rs-select2 .select2-container .select2-selection--single {
            outline: none;
            border: none;
            height: 34px;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 34px;
            padding-left: 0;
            color: #555;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
            height: 32px;
            right: 4px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
            display: none;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
            font-family: "Material-Design-Iconic-Font";
            content: '\f2f9';
            font-size: 18px;
            color: #ccc;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
            -webkit-transform: rotate(-180deg);
            -moz-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .select2-container--open .select2-dropdown--below {
            border: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            border: 1px solid #e0e0e0;
            margin-top: 5px;
            overflow: hidden;
        }

        /* ==========================================================================
   #TITLE
   ========================================================================== */
        .title {
            margin-bottom: 37px;
        }

        /* ==========================================================================
   #CARD
   ========================================================================== */
        .card {
            overflow: hidden;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: #fff;
        }

        .card-1 {
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card-1 .card-heading {
            background: url("../images/bg-head-02.jpg") center center/cover no-repeat;
            padding-top: 210px;
        }

        .card-1 .card-body {
            padding: 0 90px;
            padding-top: 55px;
            padding-bottom: 65px;
        }

        @media (max-width: 767px) {
            .card-1 .card-body {
                padding: 0 40px;
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }
    </style>
</body>

</html>