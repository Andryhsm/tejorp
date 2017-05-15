<?php require './protection.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Installation</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="btn.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">

        <style>
            #rot  img{
                -webkit-transition:-webkit-transform .9s; 
                -moz-transition:-moz-transform .9s;       
                -o-transition:-o-transform .9s;          
                -ms-transition:-ms-transform .9s;         
                transition:transform .9s;
            }
            #rot  img:hover{
                -webkit-transform:rotate(720deg); 
                -moz-transform:rotate(720deg);
                -o-transform:rotate(720deg); 
                -ms-transform:rotate(720deg); 
                transform:rotate(720deg);
            }
            img.zoomEffect {
                -moz-transition: all 0.5s ease-in-out 0s;
                -webkit-transition: all 0.5s ease-in-out 0s;
                -o-transition: all 0.5s ease-in-out 0s;
                -ms-transition: all 0.5s ease-in-out 0s;
                transition: all 0.5s ease-in-out 0s;
                opacity: 0.7;
                cursor: pointer;
            }
            img.zoomEffect:hover {
                -moz-transform: rotate(5deg) scale(1.10);
                -webkit-transform: rotate(5deg) scale(1.10);
                -o-transform: rotate(5deg) scale(1.10);
                -ms-transform: rotate(5deg) scale(1.10);
                transform: rotate(5deg) scale(1.10);
                opacity: 1;
            }
            body
            {
                background: url("img/bg5.jpg") no-repeat center fixed;
                background-size: cover;
                -webkit-background-size: cover;
            }
            label {
                color: white;
            }
            .well
            {
                background: rgba(10, 10, 10, 0.51);
            }

            h4{
                color: yellowgreen;
                font-size: 1.8em;
            }

            .etapesIndication
            {
                position: fixed;
                top: 130px;
                left: 10px;
                width: 150px;
                height: auto;
                z-index: 9999;
            }
            .bleu{
                background:rgba(0,63,71,.7);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .bleugrand{
                background:rgba(0,63,71,.7);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .rouge{
                background:rgba(133,32,28,.7);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .rougegrand{
                background:rgba(133,32,28,.7);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .verte{
                background:rgba(8, 110, 25, 0.66);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .vertegrand{
                background:rgba(8, 110, 25, 0.66);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .orangee{
                background:rgba(233,101,25,.7);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .orangeegrand{
                background:rgba(233,101,25,.7);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .violette{
                background:rgba(84, 46, 90, 0.66);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .violettegrand{
                background:rgba(84, 46, 90, 0.66);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .jaune{
                background:rgba(161,145,0,.7);
                border-radius:50%;
                color: white;
                padding: 33px 16px;
                width:85px;
                height:85px;
                margin-bottom: 7px;
                cursor: pointer;
            }
            .jaunegrand{
                background:rgba(161,145,0,.7);
                border-radius:50%;
                color: white;
                padding: 43px 23px;
                width:120px;
                height:120px;
                margin-bottom: 7px;
                border: 10px #fff solid;
            }
            .decale{
                margin-left: 20px;
            }

            
        </style>

        <script src="jquery/jquery-2.1.4.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datetimepicker.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datepicker.fr.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <script>
            $(document).ready(function () {

                $('#titreEtape').html("<div class='bleugrand'>Etape 1</div><div class='decale'><div id='12' class='rouge'>Etape 2</div><div id='13' class='verte'>Etape 3</div><div id='14' class='orangee'>Etape 4</div><div id='15' class='violette'>Etape 5</div><div id='16' class='jaune'>Etape 6</div></div>");

                $("#insulinelentematin").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            ILdiner = ($("#insulinelentediner").val()) ? $("#insulinelentediner").val() : 0,
                            ILcollation = ($("#insulinelentecollation").val()) ? $("#insulinelentecollation").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + parseInt(ILdiner) + parseInt(ILcollation);
                    $("#totalinsulinelente").val(totalIL);
                });
                $("#insulinelentemidi").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            ILdiner = ($("#insulinelentediner").val()) ? $("#insulinelentediner").val() : 0,
                            ILcollation = ($("#insulinelentecollation").val()) ? $("#insulinelentecollation").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + parseInt(ILdiner) + parseInt(ILcollation);
                    $("#totalinsulinelente").val(totalIL);
                });
                $("#insulinelentesoir").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            ILdiner = ($("#insulinelentediner").val()) ? $("#insulinelentediner").val() : 0,
                            ILcollation = ($("#insulinelentecollation").val()) ? $("#insulinelentecollation").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + parseInt(ILdiner) + parseInt(ILcollation);
                    $("#totalinsulinelente").val(totalIL);
                });
                $("#insulinelentediner").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            ILdiner = ($("#insulinelentediner").val()) ? $("#insulinelentediner").val() : 0,
                            ILcollation = ($("#insulinelentecollation").val()) ? $("#insulinelentecollation").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + parseInt(ILdiner) + parseInt(ILcollation);
                    $("#totalinsulinelente").val(totalIL);
                });
                $("#insulinelentecollation").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            ILdiner = ($("#insulinelentediner").val()) ? $("#insulinelentediner").val() : 0,
                            ILcollation = ($("#insulinelentecollation").val()) ? $("#insulinelentecollation").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + parseInt(ILdiner) + parseInt(ILcollation);
                    $("#totalinsulinelente").val(totalIL);
                });


                $("#insulinerapidematin").change(function (event) {
                    var IRdiner = ($("#insulinerapidediner").val()) ? $("#insulinerapidediner").val() : 0,
                            IRcollation = ($("#insulinerapidecollation").val()) ? $("#insulinerapidecollation").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir) + parseInt(IRdiner) + parseInt(IRcollation);
                    $("#totalinsulinerapide").val(totalR);

                });
                $("#insulinerapidemidi").change(function (event) {
                    var IRdiner = ($("#insulinerapidediner").val()) ? $("#insulinerapidediner").val() : 0,
                            IRcollation = ($("#insulinerapidecollation").val()) ? $("#insulinerapidecollation").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir) + parseInt(IRdiner) + parseInt(IRcollation);
                    $("#totalinsulinerapide").val(totalR);
                });
                $("#insulinerapidesoir").change(function (event) {
                    var IRdiner = ($("#insulinerapidediner").val()) ? $("#insulinerapidediner").val() : 0,
                            IRcollation = ($("#insulinerapidecollation").val()) ? $("#insulinerapidecollation").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir) + parseInt(IRdiner) + parseInt(IRcollation);
                    $("#totalinsulinerapide").val(totalR);
                });

                $("#insulinerapidediner").change(function (event) {
                    var IRdiner = ($("#insulinerapidediner").val()) ? $("#insulinerapidediner").val() : 0,
                            IRcollation = ($("#insulinerapidecollation").val()) ? $("#insulinerapidecollation").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir) + parseInt(IRdiner) + parseInt(IRcollation);
                    $("#totalinsulinerapide").val(totalR);
                });

                $("#insulinerapidecollation").change(function (event) {
                    var IRdiner = ($("#insulinerapidediner").val()) ? $("#insulinerapidediner").val() : 0,
                            IRcollation = ($("#insulinerapidecollation").val()) ? $("#insulinerapidecollation").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir) + parseInt(IRdiner) + parseInt(IRcollation);
                    $("#totalinsulinerapide").val(totalR);
                });
                $('.datepicker').datepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    format: "dd-mm-yyyy",
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });

                $('.datepickerAll').datepicker({
                    language: 'fr',
                    showAnim: 'fadeIn',
                    autoclose: true,
                    format: "dd-mm-yyyy",
                    todayHighlight: true,
                    orientation: "auto",
                    todayBtn: true
                });

                $('.datetimepicker').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
                $("#12").click(function () {
                    $('#2').trigger('click');
                });
                $("#13").click(function () {
                    $('#3').trigger('click');
                });
                $("#14").click(function () {
                    $('#4').trigger('click');
                });
                $("#15").click(function () {
                    $('#5').trigger('click');
                });
                $("#16").click(function () {
                    $('#6').trigger('click');
                });
                $("#1").click(function () {
                    $("#etape1").show();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    $('#titreEtape').html("<div class='bleugrand'>Etape 1</div><div class='decale'><div id='112' class='rouge'>Etape 2</div><div id='113' class='verte'>Etape 3</div><div id='114' class='orangee'>Etape 4</div><div id='115' class='violette'>Etape 5</div><div id='116' class='jaune'>Etape 6</div></div>");
                    $("#112").click(function () {
                        $('#2').trigger('click');
                    });
                    $("#113").click(function () {
                        $('#3').trigger('click');
                    });
                    $("#114").click(function () {
                        $('#4').trigger('click');
                    });
                    $("#115").click(function () {
                        $('#5').trigger('click');
                    });
                    $("#116").click(function () {
                        $('#6').trigger('click');
                    });
                });
                $("#2").click(function () {
                    $("#etape1").hide();
                    $("#etape2").show();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    $('#titreEtape').html("<div class='decale'><div id='21' class='bleu'>Etape 1</div></div><div class='rougegrand'>Etape 2</div><div class='decale'><div id='23' class='verte'>Etape 3</div><div id='24' class='orangee'>Etape 4</div><div id='25' class='violette'>Etape 5</div><div id='26' class='jaune'>Etape 6</div></div>");
                    $("#21").click(function () {
                        $('#1').trigger('click');
                    });
                    $("#23").click(function () {
                        $('#3').trigger('click');
                    });
                    $("#24").click(function () {
                        $('#4').trigger('click');
                    });
                    $("#25").click(function () {
                        $('#5').trigger('click');
                    });
                    $("#26").click(function () {
                        $('#6').trigger('click');
                    });
                    var ValDatesHemGlyc1 = 0, ValDatesHemGlyc2 = 0, ValDatesHemGlyc3 = 0, ValDatesHemGlyc4 = 0, ValDatesHemGlyc5 = 0, ValDatesHemGlyc6 = 0, ValDatesHemGlyc7 = 0, ValDatesHemGlyc8 = 0, ValDatesHemGlyc9 = 0;
                    var ValHbA1cHemGlyc1 = 0, ValHbA1cHemGlyc2 = 0, ValHbA1cHemGlyc3 = 0, ValHbA1cHemGlyc4 = 0, ValHbA1cHemGlyc5 = 0, ValHbA1cHemGlyc6 = 0, ValHbA1cHemGlyc7 = 0, ValHbA1cHemGlyc8 = 0, ValHbA1cHemGlyc9 = 0;
                    jQuery(document).ready(function ($) {


                        // recup data table02
                        // recup data table Dates
                        $("#ValDatesHemGlyc1").change(function (event) {
                            ValDatesHemGlyc1 = $('#ValDatesHemGlyc1').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc2").change(function (event) {
                            ValDatesHemGlyc2 = $('#ValDatesHemGlyc2').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc3").change(function (event) {
                            ValDatesHemGlyc3 = $('#ValDatesHemGlyc3').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc4").change(function (event) {
                            ValDatesHemGlyc4 = $('#ValDatesHemGlyc4').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc5").change(function (event) {
                            ValDatesHemGlyc5 = $('#ValDatesHemGlyc5').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc6").change(function (event) {
                            ValDatesHemGlyc6 = $('#ValDatesHemGlyc6').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc7").change(function (event) {
                            ValDatesHemGlyc7 = $('#ValDatesHemGlyc7').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc8").change(function (event) {
                            ValDatesHemGlyc8 = $('#ValDatesHemGlyc8').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc9").change(function (event) {
                            ValDatesHemGlyc9 = $('#ValDatesHemGlyc9').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        // recup data table Dates
                        // recup data table HbA1c
                        $("#ValHbA1cHemGlyc1").change(function (event) {
                            ValHbA1cHemGlyc1 = $('#ValHbA1cHemGlyc1').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc2").change(function (event) {
                            ValHbA1cHemGlyc2 = $('#ValHbA1cHemGlyc2').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc3").change(function (event) {
                            ValHbA1cHemGlyc3 = $('#ValHbA1cHemGlyc3').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc4").change(function (event) {
                            ValHbA1cHemGlyc4 = $('#ValHbA1cHemGlyc4').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc5").change(function (event) {
                            ValHbA1cHemGlyc5 = $('#ValHbA1cHemGlyc5').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc6").change(function (event) {
                            ValHbA1cHemGlyc6 = $('#ValHbA1cHemGlyc6').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc7").change(function (event) {
                            ValHbA1cHemGlyc7 = $('#ValHbA1cHemGlyc7').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc8").change(function (event) {
                            ValHbA1cHemGlyc8 = $('#ValHbA1cHemGlyc8').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            capturer_img("barhg");
                        });
                        $("#ValHbA1cHemGlyc9").change(function (event) {
                            ValHbA1cHemGlyc9 = $('#ValHbA1cHemGlyc9').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                            setTimeout(function () {
                                capture('barhg');
                            }, 800);    
                        });
                        // recup data table HbA1c
                        initialiser();
                        initialiser2();

                        //init graphe table HG
                        var barDataHG = {
                            labels: [ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,1)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var barHbA1c = document.getElementById('barhg').getContext('2d');
                        new Chart(barHbA1c).Bar(barDataHG, barOptions);
                        //init graphe table HG
                    });


                    function Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9) {
                        var barDataHG = {
                            labels: [ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9],
                            datasets: [{
                                    fillColor: "rgba(147,163,244,1)",
                                    strokeColor: "rgba(147,163,244,0.8)",
                                    highlightFill: "rgba(147,163,244,0.75)",
                                    highlightStroke: "rgba(147,163,244,1)",
                                    data: [ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var barHbA1c = document.getElementById('barhg').getContext('2d');
                        new Chart(barHbA1c).Bar(barDataHG, barOptions);
                    }
                });
                $("#3").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").show();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    $('#titreEtape').html("<div class='decale'><div id='31' class='bleu'>Etape 1</div><div id='32' class='rouge'>Etape 2</div></div><div class='vertegrand'>Etape 3</div><div class='decale'><div id='34' class='orangee'>Etape 4</div><div id='35' class='violette'>Etape 5</div><div id='36' class='jaune'>Etape 6</div></div>");
                    $("#31").click(function () {
                        $('#1').trigger('click');
                    });
                    $("#32").click(function () {
                        $('#2').trigger('click');
                    });
                    $("#34").click(function () {
                        $('#4').trigger('click');
                    });
                    $("#35").click(function () {
                        $('#5').trigger('click');
                    });
                    $("#36").click(function () {
                        $('#6').trigger('click');
                    });

                    var date1 = "", date2 = "", date3 = "", date4 = "", date5 = "", date6 = "", date7 = "", date8 = "", date9 = "";
                    var taille1 = 0, taille2 = 0, taille3 = 0, taille4 = 0, taille5 = 0, taille6 = 0, taille7 = 0, taille8 = 0, taille9 = 0;
                    var poids1 = 0, poids2 = 0, poids3 = 0, poids4 = 0, poids5 = 0, poids6 = 0, poids7 = 0, poids8 = 0, poids9 = 0;
                    var imc1 = 0, imc2 = 0, imc3 = 0, imc4 = 0, imc5 = 0, imc6 = 0, imc7 = 0, imc8 = 0, imc9 = 0;
                    jQuery(document).ready(function ($) {

                      <?php 

                        for($i = 1; $i < 9; $i++){
                            echo "$('#date".$i."').change(function (event) {
                                    date".$i." = $('#date".$i."').val();
                                    dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                                });
                                $('#poids".$i."').change(function (event) {
                                    date".$i." = $('#date".$i."').val();
                                    taille".$i." = get_val('taille".$i."');
                                    poids".$i." = get_val('poids".$i."');
                                    if(taille".$i." != 0 && poids".$i." != 0){
                                        var taille = Math.pow((taille".$i." * 0.01), 2);
                                        imc".$i." = poids".$i." / taille;
                                        imc".$i." = imc".$i.".toFixed(1);
                                        $('#imc".$i."').val(imc".$i.");
                                        dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                                        capturer_img('bar');
                                    }
                                });
                                 $('#taille".$i."').change(function (event) {
                                    date".$i." = $('#date".$i."').val();
                                    taille".$i." = get_val('taille".$i."');
                                    poids".$i." = get_val('poids".$i."');
                                    if(taille".$i." != 0 && poids".$i." != 0){
                                        var taille = Math.pow((taille".$i." * 0.01), 2);
                                        imc".$i." = poids".$i." / taille;
                                        imc".$i." = imc".$i.".toFixed(1);
                                        $('#imc".$i."').val(imc".$i.");
                                        dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                                        capturer_img('bar');
                                    }
                                });";
                        }
                      ?> 
                       
                      
                        var barData = {
                            labels: [date1, date2, date3, date4, date5, date6, date7, date8, date9],
                            datasets: [
                                {
                                    fillColor: "rgba(81, 255, 81,1)",
                                    strokeColor: "rgba(81, 255, 81,0.8)",
                                    highlightFill: "rgba(81, 255, 81,0.75)",
                                    highlightStroke: "rgba(81, 255, 81,1)",
                                    data: [taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9]
                                },
                                {
                                    fillColor: "rgba(0, 215, 0,1)",
                                    strokeColor: "rgba(0, 215, 0, 0.8)",
                                    highlightFill: "rgba(0, 215, 0,0.75)",
                                    highlightStroke: "rgba(0, 215, 0, 1)",
                                    data: [poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9]
                                },
                                {
                                    fillColor: "rgba(0, 128, 0,1)",
                                    strokeColor: "rgba(0, 128, 0,0.8)",
                                    highlightFill: "rgba(0, 128, 0,0.75)",
                                    highlightStroke: "rgba(0, 128, 0, 0,1)",
                                    data: [imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9]
                                }
                            ]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bar = document.getElementById('bar').getContext('2d');
                        new Chart(bar).Line(barData, barOptions);
                    });
                    function get_val(target){
                        var val = $("#"+target).val();
                        return (val != "" && !isNaN(val)) ? val : 0;
                    }
                    function dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9) {
                        var barData = {
                            labels: [date1, date2, date3, date4, date5, date6, date7, date8, date9],
                            datasets: [
                                {
                                    fillColor: "rgba(81, 255, 81,1)",
                                    strokeColor: "rgba(81, 255, 81,0.8)",
                                    highlightFill: "rgba(81, 255, 81,0.75)",
                                    highlightStroke: "rgba(81, 255, 81,1)",
                                    data: [taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9]
                                },
                                {
                                    fillColor: "rgba(0, 215, 0,1)",
                                    strokeColor: "rgba(0, 215, 0, 0.8)",
                                    highlightFill: "rgba(0, 215, 0,0.75)",
                                    highlightStroke: "rgba(0, 215, 0, 1)",
                                    data: [poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9]
                                },
                                {
                                    fillColor: "rgba(0, 128, 0,1)",
                                    strokeColor: "rgba(0, 128, 0,0.8)",
                                    highlightFill: "rgba(0, 128, 0,0.75)",
                                    highlightStroke: "rgba(0, 128, 0, 0,1)",
                                    data: [imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9]
                                }
                            ]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bar = document.getElementById('bar').getContext('2d');
                        new Chart(bar).Line(barData, barOptions);
                    }
                });
                $("#4").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").show();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    $('#titreEtape').html("<div class='decale'><div id='41' class='bleu'>Etape 1</div><div id='42' class='rouge'>Etape 2</div><div id='43' class='verte'>Etape 3</div></div><div class='orangeegrand'>Etape 4</div><div class='decale'><div id='45' class='violette'>Etape 5</div><div id='46' class='jaune'>Etape 6</div></div>");

                    $("#41").click(function () {
                        $('#1').trigger('click');
                    });
                    $("#42").click(function () {
                        $('#2').trigger('click');
                    });
                    $("#43").click(function () {
                        $('#3').trigger('click');
                    });
                    $("#45").click(function () {
                        $('#5').trigger('click');
                    });
                    $("#46").click(function () {
                        $('#6').trigger('click');
                    });
                    var pmpdate1 = "",
                            pmpdate2 = "",
                            pmpdate3 = "",
                            pmpdate4 = "",
                            pmpdate5 = "",
                            pmpdate6 = "",
                            pmpdate7 = "",
                            pmpdate8 = "";
                    var pmpdate9 = "",
                            pmpdate10 = "",
                            pmpdate11 = "",
                            pmpdate12 = "",
                            pmpdate13 = "",
                            pmpdate14 = "",
                            pmpdate15 = "",
                            pmpdate16 = "";
                    var pmpdate17 = "",
                            pmpdate18 = "",
                            pmpdate19 = "",
                            pmpdate20 = "",
                            pmpdate21 = "",
                            pmpdate22 = "",
                            pmpdate23 = "",
                            pmpdate24 = "";
                    var pmpdate25 = "",
                            pmpdate26 = "",
                            pmpdate27 = "",
                            pmpdate28 = "",
                            pmpdate29 = "",
                            pmpdate291 = "",
                            pmpdate292 = "",
                            pmpdate293 = "";
                    var pmpdate294 = "",
                            pmpdate295 = "",
                            pmpdate296 = "",
                            pmpdate297 = "";
                    jQuery(document).ready(function ($) {
                        $("#pmpdate1").change(function (event) {
                            pmpdate1 = $('#pmpdate1').val();
                        });
                        $("#pmpdate2").change(function (event) {
                            pmpdate2 = $('#pmpdate2').val();
                        });
                        $("#pmpdate3").change(function (event) {
                            pmpdate3 = $('#pmpdate3').val();
                        });
                        $("#pmpdate4").change(function (event) {
                            pmpdate4 = $('#pmpdate4').val();
                        });
                        $("#pmpdate5").change(function (event) {
                            pmpdate5 = $('#pmpdate5').val();
                        });
                        $("#pmpdate6").change(function (event) {
                            pmpdate6 = $('#pmpdate6').val();
                        });
                        $("#pmpdate7").change(function (event) {
                            pmpdate7 = $('#pmpdate7').val();
                        });
                        $("#pmpdate8").change(function (event) {
                            pmpdate8 = $('#pmpdate8').val();
                        });
                        $("#pmpdate9").change(function (event) {
                            pmpdate9 = $('#pmpdate9').val();
                        });
                        $("#pmpdate10").change(function (event) {
                            pmpdate10 = $('#pmpdate10').val();
                        });
                        $("#pmpdate11").change(function (event) {
                            pmpdate11 = $('#pmpdate11').val();
                        });
                        $("#pmpdate12").change(function (event) {
                            pmpdate12 = $('#pmpdate12').val();
                        });
                        $("#pmpdate13").change(function (event) {
                            pmpdate13 = $('#pmpdate13').val();
                        });
                        $("#pmpdate14").change(function (event) {
                            pmpdate14 = $('#pmpdate14').val();
                        });
                        $("#pmpdate15").change(function (event) {
                            pmpdate15 = $('#pmpdate15').val();
                        });
                        $("#pmpdate16").change(function (event) {
                            pmpdate16 = $('#pmpdate16').val();
                        });
                        $("#pmpdate17").change(function (event) {
                            pmpdate17 = $('#pmpdate17').val();
                        });
                        $("#pmpdate18").change(function (event) {
                            pmpdate18 = $('#pmpdate18').val();
                        });
                        $("#pmpdate19").change(function (event) {
                            pmpdate19 = $('#pmpdate19').val();
                        });
                        $("#pmpdate20").change(function (event) {
                            pmpdate20 = $('#pmpdate20').val();
                        });
                        $("#pmpdate21").change(function (event) {
                            pmpdate21 = $('#pmpdate21').val();
                        });
                        $("#pmpdate22").change(function (event) {
                            pmpdate22 = $('#pmpdate22').val();
                        });
                        $("#pmpdate23").change(function (event) {
                            pmpdate23 = $('#pmpdate23').val();
                        });
                        $("#pmpdate24").change(function (event) {
                            pmpdate24 = $('#pmpdate24').val();
                        });
                        $("#pmpdate25").change(function (event) {
                            pmpdate25 = $('#pmpdate25').val();
                        });
                        $("#pmpdate26").change(function (event) {
                            pmpdate26 = $('#pmpdate26').val();
                        });
                        $("#pmpdate27").change(function (event) {
                            pmpdate27 = $('#pmpdate27').val();
                        });
                        $("#pmpdate28").change(function (event) {
                            pmpdate28 = $('#pmpdate28').val();
                        });
                        $("#pmpdate29").change(function (event) {
                            pmpdate29 = $('#pmpdate29').val();
                        });
                        $("#pmpdate291").change(function (event) {
                            pmpdate291 = $('#pmpdate291').val();
                        });
                        $("#pmpdate292").change(function (event) {
                            pmpdate292 = $('#pmpdate292').val();
                        });
                        $("#pmpdate293").change(function (event) {
                            pmpdate293 = $('#pmpdate293').val();
                        });
                        $("#pmpdate294").change(function (event) {
                            pmpdate294 = $('#pmpdate294').val();
                        });
                        $("#pmpdate295").change(function (event) {
                            pmpdate1295 = $('#pmpdate1295').val();
                        });
                        $("#pmpdate296").change(function (event) {
                            pmpdate296 = $('#pmpdate296').val();
                        });
                        $("#pmpdate297").change(function (event) {
                            pmpdate297 = $('#pmpdate297').val();
                        });
                        $("#pmpcommentaire1").change(function (event) {
                            pmpcommentaire1 = $('#pmpcommentaire1').val();
                        });
                        $("#pmpcommentaire2").change(function (event) {
                            pmpcommentaire2 = $('#pmpcommentaire2').val();
                        });
                        $("#pmpcommentaire3").change(function (event) {
                            pmpcommentaire3 = $('#pmpcommentaire3').val();
                        });
                        $("#pmpcommentaire4").change(function (event) {
                            pmpcommentaire4 = $('#pmpcommentaire4').val();
                        });
                        $("#pmpcommentaire5").change(function (event) {
                            pmpcommentaire5 = $('#pmpcommentaire5').val();
                        });
                        $("#pmpcommentaire6").change(function (event) {
                            pmpcommentaire6 = $('#pmpcommentaire6').val();
                        });
                        $("#pmpcommentaire7").change(function (event) {
                            pmpcommentaire7 = $('#pmpcommentaire7').val();
                        });
                        $("#pmpcommentaire8").change(function (event) {
                            pmpcommentaire8 = $('#pmpcommentaire8').val();
                        });
                        $("#pmpcommentaire9").change(function (event) {
                            pmpcommentaire9 = $('#pmpcommentaire9').val();
                        });

                    });
                    var alarmedate1 = "",
                            alarmedate2 = "",
                            alarmedate3 = "",
                            alarmedate4 = "",
                            alarmedate5 = "",
                            alarmedate6 = "",
                            alarmedate7 = "",
                            alarmedate8 = "",
                            alarmedate9 = "",
                            alarmedate10 = "",
                            alarmedate11 = "",
                            alarmedate12 = "",
                            alarmedate13 = "",
                            alarmedate14 = "",
                            alarmedate15 = "",
                            alarmedate16 = "",
                            alarmedate17 = "",
                            alarmedate18 = "",
                            alarmedate19 = "",
                            alarmedate20 = "",
                            alarmedate21 = "",
                            alarmedate22 = "",
                            alarmedate23 = "",
                            alarmedate24 = "",
                            alarmedate25 = "",
                            alarmedate26 = "",
                            alarmedate27 = "",
                            alarmedate28 = "";
                    jQuery(document).ready(function ($) {
                        $("#alarmedate1").change(function (event) {
                            alarmedate1 = $('#alarmedate1').val();
                        });
                        $("#alarmedate2").change(function (event) {
                            alarmedate2 = $('#alarmedate2').val();
                        });
                        $("#alarmedate3").change(function (event) {
                            alarmedate3 = $('#alarmedate3').val();
                        });
                        $("#alarmedate4").change(function (event) {
                            alarmedate4 = $('#alarmedate4').val();
                        });
                        $("#alarmedate5").change(function (event) {
                            alarmedate5 = $('#alarmedate5').val();
                        });
                        $("#alarmedate6").change(function (event) {
                            alarmedate6 = $('#alarmedate6').val();
                        });
                        $("#alarmedate7").change(function (event) {
                            alarmedate7 = $('#alarmedate7').val();
                        });
                        $("#alarmedate8").change(function (event) {
                            alarmedate8 = $('#alarmedate8').val();
                        });
                        $("#alarmedate9").change(function (event) {
                            alarmedate9 = $('#alarmedate9').val();
                        });
                        $("#alarmedate10").change(function (event) {
                            alarmedate10 = $('#alarmedate10').val();
                        });
                        $("#alarmedate11").change(function (event) {
                            alarmedate11 = $('#alarmedate11').val();
                        });
                        $("#alarmedate12").change(function (event) {
                            alarmedate12 = $('#alarmedate12').val();
                        });
                        $("#alarmedate13").change(function (event) {
                            alarmedate13 = $('#alarmedate13').val();
                        });
                        $("#alarmedate14").change(function (event) {
                            alarmedate14 = $('#alarmedate14').val();
                        });
                        $("#alarmedate15").change(function (event) {
                            alarmedate15 = $('#alarmedate15').val();
                        });
                        $("#alarmedate16").change(function (event) {
                            alarmedate16 = $('#alarmedate16').val();
                        });
                        $("#alarmedate17").change(function (event) {
                            alarmedate17 = $('#alarmedate17').val();
                        });
                        $("#alarmedate18").change(function (event) {
                            alarmedate18 = $('#alarmedate18').val();
                        });
                        $("#alarmedate19").change(function (event) {
                            alarmedate19 = $('#alarmedate19').val();
                        });
                        $("#alarmedate20").change(function (event) {
                            alarmedate20 = $('#alarmedate20').val();
                        });
                        $("#alarmedate21").change(function (event) {
                            alarmedate21 = $('#alarmedate21').val();
                        });
                        $("#alarmedate22").change(function (event) {
                            alarmedate22 = $('#alarmedate22').val();
                        });
                        $("#alarmedate23").change(function (event) {
                            alarmedate23 = $('#alarmedate23').val();
                        });
                        $("#alarmedate24").change(function (event) {
                            alarmedate24 = $('#alarmedate24').val();
                        });
                        $("#alarmedate25").change(function (event) {
                            alarmedate25 = $('#alarmedate25').val();
                        });
                        $("#alarmedate26").change(function (event) {
                            alarmedate26 = $('#alarmedate26').val();
                        });
                        $("#alarmedate27").change(function (event) {
                            alarmedate27 = $('#alarmedate27').val();
                        });
                        $("#alarmedate28").change(function (event) {
                            alarmedate28 = $('#alarmedate28').val();
                        });
                        $("#alarmecommentaire1").change(function (event) {
                            alarmecommentaire1 = $('#alarmecommentaire1').val();
                        });
                        $("#alarmecommentaire2").change(function (event) {
                            alarmecommentaire2 = $('#alarmecommentaire2').val();
                        });
                        $("#alarmecommentaire3").change(function (event) {
                            alarmecommentaire3 = $('#alarmecommentaire3').val();
                        });
                        $("#alarmecommentaire4").change(function (event) {
                            alarmecommentaire4 = $('#alarmecommentaire4').val();
                        });
                        $("#alarmecommentaire5").change(function (event) {
                            alarmecommentaire5 = $('#alarmecommentaire5').val();
                        });
                        $("#alarmecommentaire6").change(function (event) {
                            alarmecommentaire6 = $('#alarmecommentaire6').val();
                        });
                        $("#alarmecommentaire7").change(function (event) {
                            alarmecommentaire7 = $('#alarmecommentaire7').val();
                        });
                    });

                    var manipdate1,
                            manipdate2,
                            manipdate3,
                            manipdate4,
                            manipdate5,
                            manipdate6,
                            manipdate7,
                            manipdate8,
                            manipdate9,
                            manipdate10,
                            manipdate11,
                            manipdate12,
                            manipdate13,
                            manipdate14,
                            manipdate15,
                            manipdate16,
                            manipdate17,
                            manipdate18,
                            manipdate19,
                            manipdate20;
                    jQuery(document).ready(function ($) {
                        $("#manipdate1").change(function (event) {
                            manipdate1 = $('#manipdate1').val();
                        });
                        $("#manipdate2").change(function (event) {
                            manipdate2 = $('#manipdate2').val();
                        });
                        $("#manipdate3").change(function (event) {
                            manipdate3 = $('#manipdate3').val();
                        });
                        $("#manipdate4").change(function (event) {
                            manipdate4 = $('#manipdate4').val();
                        });
                        $("#manipdate5").change(function (event) {
                            manipdate5 = $('#manipdate5').val();
                        });
                        $("#manipdate6").change(function (event) {
                            manipdate6 = $('#manipdate6').val();
                        });
                        $("#manipdate7").change(function (event) {
                            manipdate7 = $('#manipdate7').val();
                        });
                        $("#manipdate8").change(function (event) {
                            manipdate8 = $('#manipdate8').val();
                        });
                        $("#manipdate9").change(function (event) {
                            manipdate9 = $('#manipdate9').val();
                        });
                        $("#manipdate10").change(function (event) {
                            manipdate10 = $('#manipdate10').val();
                        });
                        $("#manipdate11").change(function (event) {
                            manipdate11 = $('#manipdate11').val();
                        });
                        $("#manipdate12").change(function (event) {
                            manipdate12 = $('#manipdate12').val();
                        });
                        $("#manipdate13").change(function (event) {
                            manipdate13 = $('#manipdate13').val();
                        });
                        $("#manipdate14").change(function (event) {
                            manipdate14 = $('#manipdate14').val();
                        });
                        $("#manipdate15").change(function (event) {
                            manipdate15 = $('#manipdate15').val();
                        });
                        $("#manipdate16").change(function (event) {
                            manipdate16 = $('#manipdate16').val();
                        });
                        $("#manipdate17").change(function (event) {
                            manipdate17 = $('#manipdate17').val();
                        });
                        $("#manipdate18").change(function (event) {
                            manipdate18 = $('#manipdate18').val();
                        });
                        $("#manipdate19").change(function (event) {
                            manipdate19 = $('#manipdate19').val();
                        });
                        $("#manipdate20").change(function (event) {
                            manipdate20 = $('#manipdate20').val();
                        });
                        $("#manipcommentaire1").change(function (event) {
                            manipcommentaire1 = $('#manipcommentaire1').val();
                        });
                        $("#manipcommentaire2").change(function (event) {
                            manipcommentaire2 = $('#manipcommentaire2').val();
                        });
                        $("#manipcommentaire3").change(function (event) {
                            manipcommentaire3 = $('#manipcommentaire3').val();
                        });
                        $("#manipcommentaire4").change(function (event) {
                            manipcommentaire4 = $('#manipcommentaire4').val();
                        });
                        $("#manipcommentaire5").change(function (event) {
                            manipcommentaire5 = $('#manipcommentaire5').val();
                        });
                    });
                });
                $("#5").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").show();
                    $("#etape6").hide();
                    $('#titreEtape').html("<div class='decale'><div id='51' class='bleu'>Etape 1</div><div id='52' class='rouge'>Etape 2</div><div id='53' class='verte'>Etape 3</div><div id='54' class='orangee'>Etape 4</div></div><div class='violettegrand'>Etape 5</div><div class='decale'><div id='56' class='jaune'>Etape 6</div></div>");

                    $("#51").click(function () {
                        $('#1').trigger('click');
                    });
                    $("#52").click(function () {
                        $('#2').trigger('click');
                    });
                    $("#53").click(function () {
                        $('#3').trigger('click');
                    });
                    $("#54").click(function () {
                        $('#4').trigger('click');
                    });
                    $("#56").click(function () {
                        $('#6').trigger('click');
                    });
                    var cathdate1 = "",
                            cathdate2 = "",
                            cathdate3 = "",
                            cathdate4 = "",
                            cathdate5 = "",
                            cathdate6 = "",
                            cathdate7 = "",
                            cathdate8 = "";
                    var cathdate9 = "",
                            cathdate10 = "",
                            cathdate11 = "",
                            cathdate12 = "",
                            cathdate13 = "",
                            cathdate14 = "",
                            cathdate15 = "",
                            cathdate16 = "";
                    var cathdate17 = "",
                            cathdate18 = "",
                            cathdate19 = "",
                            cathdate20 = "",
                            cathdate21 = "",
                            cathdate22 = "",
                            cathdate23 = "",
                            cathdate24 = "";
                    var cathdate25 = "",
                            cathdate26 = "",
                            cathdate27 = "",
                            cathdate28 = "",
                            cathdate29 = "",
                            cathdate211 = "",
                            cathdate212 = "",
                            cathdate213 = "";
                    var cathdate214 = "",
                            cathdate215 = "",
                            cathdate216 = "",
                            cathdate217 = ""
                    cathdate218 = "",
                            cathdate219 = "",
                            cathdate221 = "",
                            cathdate222 = "",
                            cathdate223 = "",
                            cathdate224 = "",
                            cathdate225 = "",
                            cathdate226 = "";
                    jQuery(document).ready(function ($) {
                        $("#cathdate1").change(function (event) {
                            cathdate1 = $('#cathdate1').val();
                        });
                        $("#cathdate2").change(function (event) {
                            cathdate2 = $('#cathdate2').val();
                        });
                        $("#cathdate3").change(function (event) {
                            cathdate3 = $('#cathdate3').val();
                        });
                        $("#cathdate4").change(function (event) {
                            cathdate4 = $('#cathdate4').val();
                        });
                        $("#cathdate5").change(function (event) {
                            cathdate5 = $('#cathdate5').val();
                        });
                        $("#cathdate6").change(function (event) {
                            cathdate6 = $('#cathdate6').val();
                        });
                        $("#cathdate7").change(function (event) {
                            cathdate7 = $('#cathdate7').val();
                        });
                        $("#cathdate8").change(function (event) {
                            cathdate8 = $('#cathdate8').val();
                        });
                        $("#cathdate9").change(function (event) {
                            cathdate9 = $('#cathdate9').val();
                        });
                        $("#cathdate10").change(function (event) {
                            cathdate10 = $('#cathdate10').val();
                        });
                        $("#cathdate11").change(function (event) {
                            cathdate11 = $('#cathdate11').val();
                        });
                        $("#cathdate12").change(function (event) {
                            cathdate12 = $('#cathdate12').val();
                        });
                        $("#cathdate13").change(function (event) {
                            cathdate13 = $('#cathdate13').val();
                        });
                        $("#cathdate14").change(function (event) {
                            cathdate14 = $('#cathdate14').val();
                        });
                        $("#cathdate15").change(function (event) {
                            cathdate15 = $('#cathdate15').val();
                        });
                        $("#cathdate16").change(function (event) {
                            cathdate16 = $('#cathdate16').val();
                        });
                        $("#cathdate17").change(function (event) {
                            cathdate17 = $('#cathdate17').val();
                        });
                        $("#cathdate18").change(function (event) {
                            cathdate18 = $('#cathdate18').val();
                        });
                        $("#cathdate19").change(function (event) {
                            cathdate19 = $('#cathdate19').val();
                        });
                        $("#cathdate20").change(function (event) {
                            cathdate20 = $('#cathdate20').val();
                        });
                        $("#cathdate21").change(function (event) {
                            cathdate21 = $('#cathdate21').val();
                        });
                        $("#cathdate22").change(function (event) {
                            cathdate22 = $('#cathdate22').val();
                        });
                        $("#cathdate23").change(function (event) {
                            cathdate23 = $('#cathdate23').val();
                        });
                        $("#cathdate24").change(function (event) {
                            cathdate24 = $('#cathdate24').val();
                        });
                        $("#cathdate25").change(function (event) {
                            cathdate25 = $('#cathdate25').val();
                        });
                        $("#cathdate26").change(function (event) {
                            cathdate26 = $('#cathdate26').val();
                        });
                        $("#cathdate27").change(function (event) {
                            cathdate27 = $('#cathdate27').val();
                        });
                        $("#cathdate28").change(function (event) {
                            cathdate28 = $('#cathdate28').val();
                        });
                        $("#cathdate29").change(function (event) {
                            cathdate29 = $('#cathdate29').val();
                        });
                        $("#cathdate211").change(function (event) {
                            cathdate211 = $('#cathdate211').val();
                        });
                        $("#cathdate212").change(function (event) {
                            cathdate212 = $('#cathdate212').val();
                        });
                        $("#cathdate213").change(function (event) {
                            cathdate213 = $('#cathdate213').val();
                        });
                        $("#cathdate214").change(function (event) {
                            cathdate214 = $('#cathdate214').val();
                        });
                        $("#cathdate215").change(function (event) {
                            cathdate215 = $('#cathdate215').val();
                        });
                        $("#cathdate216").change(function (event) {
                            cathdate216 = $('#cathdate216').val();
                        });
                        $("#cathdate217").change(function (event) {
                            cathdate217 = $('#cathdate217').val();
                        });
                        $("#cathdate218").change(function (event) {
                            cathdate218 = $('#cathdate218').val();
                        });
                        $("#cathdate219").change(function (event) {
                            cathdate219 = $('#cathdate219').val();
                        });
                        $("#cathdate221").change(function (event) {
                            cathdate221 = $('#cathdate221').val();
                        });
                        $("#cathdate222").change(function (event) {
                            cathdate222 = $('#cathdate222').val();
                        });
                        $("#cathdate223").change(function (event) {
                            cathdate223 = $('#cathdate223').val();
                        });
                        $("#cathdate224").change(function (event) {
                            cathdate224 = $('#cathdate224').val();
                        });
                        $("#cathdate225").change(function (event) {
                            cathdate225 = $('#cathdate225').val();
                        });
                        $("#cathdate226").change(function (event) {
                            cathdate226 = $('#cathdate226').val();
                        });
                        $("#cathcommentaire1").change(function (event) {
                            cathcommentaire1 = $('#cathcommentaire1').val();
                        });
                        $("#cathcommentaire2").change(function (event) {
                            cathcommentaire2 = $('#cathcommentaire2').val();
                        });
                        $("#cathcommentaire3").change(function (event) {
                            cathcommentaire3 = $('#cathcommentaire3').val();
                        });
                        $("#cathcommentaire4").change(function (event) {
                            cathcommentaire4 = $('#cathcommentaire4').val();
                        });
                        $("#cathcommentaire5").change(function (event) {
                            cathcommentaire5 = $('#cathcommentaire5').val();
                        });
                        $("#cathcommentaire6").change(function (event) {
                            cathcommentaire6 = $('#cathcommentaire6').val();
                        });
                        $("#cathcommentaire7").change(function (event) {
                            cathcommentaire7 = $('#cathcommentaire7').val();
                        });
                        $("#cathcommentaire8").change(function (event) {
                            cathcommentaire8 = $('#cathcommentaire8').val();
                        });
                        $("#cathcommentaire9").change(function (event) {
                            cathcommentaire9 = $('#cathcommentaire9').val();
                        });
                        $("#cathcommentaire10").change(function (event) {
                            cathcommentaire10 = $('#cathcommentaire10').val();
                        });
                        $("#cathcommentaire11").change(function (event) {
                            cathcommentaire11 = $('#cathcommentaire11').val();
                        });

                    });
                });

                var asgdetail1 = "",
                        asgdetail2 = "",
                        asgdetail3 = "",
                        asgdetail4 = "",
                        asgobservation1 = "",
                        asgobservation2 = "",
                        asgobservation3 = "",
                        asgobservation4 = "";
                jQuery(document).ready(function ($) {
                    $("#asgdetail1").change(function (event) {
                        asgdetail1 = $('#asgdetail1').val();
                    });
                    $("#asgdetail2").change(function (event) {
                        asgdetail2 = $('#asgdetail2').val();
                    });
                    $("#asgdetail3").change(function (event) {
                        asgdetail3 = $('#asgdetail3').val();
                    });
                    $("#asgdetail4").change(function (event) {
                        asgdetail4 = $('#asgdetail4').val();
                    });
                    $("#asgobservation1").change(function (event) {
                        asgobservation1 = $('#asgobservation1').val();
                    });
                    $("#asgobservation2").change(function (event) {
                        asgobservation2 = $('#asgobservation2').val();
                    });
                    $("#asgobservation3").change(function (event) {
                        asgobservation3 = $('#asgobservation3').val();
                    });
                    $("#asgobservation4").change(function (event) {
                        asgobservation4 = $('#asgobservation4').val();
                    });
                });
                var frequence1 = "",
                        frequence2 = "",
                        connaissanceoui = "",
                        connaissancenon = "";
                jQuery(document).ready(function ($) {
                    $("#frequence1").change(function (event) {
                        frequence1 = $('#frequence1').val();
                    });
                    $("#frequence2").change(function (event) {
                        frequence2 = $('#frequence2').val();
                    });
                    $("#connaissance1").change(function (event) {
                        connaissance1 = $('#connaissance1').val();
                    });
                    $("#connaissance2").change(function (event) {
                        connaissance2 = $('#connaissance2').val();
                    });
                });
                var connaissance1 = "",
                        connaissance2 = "",
                        connaissance3 = "",
                        connaissance4 = "",
                        connaissance5 = "",
                        connaissance6 = "",
                        connaissance7 = "",
                        connaissance8 = "",
                        connaissance9 = "",
                        connaissance10 = "",
                        connaissance11 = "",
                        cnsobservation1 = "",
                        cnsobservation2 = "",
                        cnsobservation3 = "",
                        cnsobservation4 = "",
                        cnsobservation5 = "",
                        cnsobservation6 = "",
                        cnsobservation7 = "",
                        cnsobservation8 = "",
                        perempdate1 = "",
                        perempdate2 = "";
                jQuery(document).ready(function ($) {
                    $("#connaissance1").change(function (event) {
                        connaissance1 = $('#connaissance1').val();
                    });
                    $("#connaissance2").change(function (event) {
                        connaissance2 = $('#connaissance2').val();
                    });
                    $("#connaissance3").change(function (event) {
                        connaissance3 = $('#connaissance3').val();
                    });
                    $("#connaissance4").change(function (event) {
                        connaissance4 = $('#connaissance4').val();
                    });
                    $("#connaissance5").change(function (event) {
                        connaissance5 = $('#connaissance5').val();
                    });
                    $("#connaissance6").change(function (event) {
                        connaissance6 = $('#connaissance6').val();
                    });
                    $("#connaissance7").change(function (event) {
                        connaissance7 = $('#connaissance7').val();
                    });
                    $("#connaissance8").change(function (event) {
                        connaissance8 = $('#connaissance8').val();
                    });
                    $("#connaissance9").change(function (event) {
                        connaissance9 = $('#connaissance9').val();
                    });
                    $("#connaissance10").change(function (event) {
                        connaissance10 = $('#connaissance10').val();
                    });
                    $("#connaissance11").change(function (event) {
                        connaissance11 = $('#connaissance11').val();
                    });
                    $("#cnsobservation1").change(function (event) {
                        cnsobservation1 = $('#cnsobservation1').val();
                    });
                    $("#cnsobservation2").change(function (event) {
                        cnsobservation2 = $('#cnsobservation2').val();
                    });
                    $("#cnsobservation3").change(function (event) {
                        cnsobservation3 = $('#cnsobservation3').val();
                    });
                    $("#cnsobservation4").change(function (event) {
                        cnsobservation4 = $('#cnsobservation4').val();
                    });
                    $("#cnsobservation5").change(function (event) {
                        cnsobservation5 = $('#cnsobservation5').val();
                    });
                    $("#cnsobservation6").change(function (event) {
                        cnsobservation6 = $('#cnsobservation6').val();
                    });
                    $("#cnsobservation7").change(function (event) {
                        cnsobservation7 = $('#cnsobservation7').val();
                    });
                    $("#cnsobservation8").change(function (event) {
                        cnsobservation8 = $('#cnsobservation8').val();
                    });
                    $("#perempdate1").change(function (event) {
                        perempdate1 = $('#perempdate1').val();
                    });
                    $("#perempdate2").change(function (event) {
                        perempdate2 = $('#perempdate2').val();
                    });
                });
                $("#6").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").show();
                    $('#titreEtape').html("<div class='decale'><div id='61' class='bleu'>Etape 1</div><div id='62' class='rouge'>Etape 2</div><div id='63' class='verte'>Etape 3</div><div id='64' class='orangee'>Etape 4</div><div id='65' class='violette'>Etape 5</div></div><div class='jaunegrand'>Etape 6</div>");

                    $("#61").click(function () {
                        $('#1').trigger('click');
                    });
                    $("#62").click(function () {
                        $('#2').trigger('click');
                    });
                    $("#63").click(function () {
                        $('#3').trigger('click');
                    });
                    $("#64").click(function () {
                        $('#4').trigger('click');
                    });
                    $("#65").click(function () {
                        $('#5').trigger('click');
                    });
                });
            });
        </script>
    </head>
    <body>
    <article>
        
        <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="./utilisateur.php">Accueil</a></li>
                    <li><a href="./modification.php">Modifier mon profil</a></li>
                    <li><a href="./lumiere.php">Conseil</a></li>
                    <li><a href="./logout.php">Déconnexion</a></li>
                  </ul>
                </div>

            </div>
        </nav>
        </div>

        <!--
        <div class="progress">
            <div class="progressbar">

            </div>
        </div>
        -->

        <div class="etapesIndication">
            <div class="list-group" id="titreEtape">
            </div>
        </div>

        <form method="POST" action="" id="form-filter" class="form-horizontal" enctype="multipart/form-data">


            <div class="container" style="margin-top: 82px;">
                <div class="item active" id="etape1">
                    <?php require './etape1.php'; ?>

                </div>
                <div class="item" id="etape2" style="display: none;">
                    <?php require './etape2.php'; ?>
                </div>
                <div cl
                ass="item"  id="etape3" style="display: none;">
                    <?php require './etape3.php'; ?>
                </div>
                <div class="item" id="etape4" style="display: none;">
                    <?php require './etape4.php'; ?>
                </div>
                <div class="item"  id="etape5" style="display: none;">
                    <?php require './etape5.php'; ?>
                </div>
                <?php echo '<input type="text" class="hidden" name="id" value="' . $_SESSION["login"] . '">'; ?>
                <div class="item" id="etape6" style="display: none;">
                    <div class="container"  style="margin-top: 230px;">
                        <div class="col-lg-3 col-md-offset-1">
                            <center>  

                                <img class="zoomEffect" src="./img/save.png" width="120" alt="" id="enregistrer">
                                <h3 style="color: black; text-align: center;">ENREGISTRER</h3> 

                            </center>
                        </div>
                        <div class="col-lg-3">
                            <center>

                                <img class="zoomEffect" src="./img/share.png" width="160" alt="">
                                <h3 style="color: black; text-align: center;">PARTAGER</h3>

                            </center>
                        </div>
                        <div class="col-lg-3">
                            <center>

                                <img class="zoomEffect" src="./img/print.png"  width="160" alt="" id="imprimer">
                                <h3 style="color: black; text-align: center;">IMPRIMER</h3>

                            </center>
                        </div>        
                    </div>
                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary hidden" id="save">Enregistrement</button>
        </form>


        <div class="container" id = "bouton">
            <ul>
                <li><a class="round green" onClick="enHaut();" id = "1">Etape 1
                        <span class="round">
                            Renseignements<br>
                            Choix du matériel
                        </span>
                    </a></li>

                <li><a class="round red" onClick="enHaut();" id = "2">Etape 2
                        <span class="round">
                            Données médicale </br>
                            Insulinothérapie </br>
                        </span>
                    </a></li>
                <li><a class="round vert" onClick="enHaut();" id = "3">Etape 3
                        <span class="round">
                            Habitude de vie <br>
                            Habitude alimentaire
                        </span>
                    </a></li>
                <li><a class="round orange" onClick="enHaut();" id = "4">Etape 4
                        <span class="round">
                            Manipulation de la Pompe <br>
                            Alarme
                        </span>
                    </a></li>
                <li><a class="round violet" onClick="enHaut();" id = "5">Etape 5
                        <span class="round">
                            Pose du cathéter <br>
                            Manipulation <br>
                            ASG
                        </span>
                    </a></li>
                <li><a class="round yellow" onClick="enHaut();" id = "6">Etape 6
                        <span class="round">
                            Enregistrer<br>
                            Partager<br>
                            Imprimer
                        </span>
                    </a></li>
            </ul>

        </div>

        <button class="btn btn-primary btn-lg hidden" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
        <div class="modal" id="loginerror">
            <div class="modal-dialog">
                <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                        <h4 class="modal-title" style="text-align: center;">Message</h4>
                    </div>
                    <div class="modal-body">
                        <div class="warning" id="erreur_inscription"></div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script> 
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/html2canvas.min.js"></script>

        <script type="text/javascript">
                    function onCapture(){
                        alert("On capture ! ");
                    }
                    $(document).ready(function () {
                        $('.round').click(function () {
                            $('.round').removeClass('active');
                            $(this).addClass('active');
                        });
                    });

                    function enHaut()
                    {

                        $('html,body').animate({scrollTop: 0}, 'slow');
                    }
        </script>

        <script type="text/javascript">
        	function capturer_img(img){
                 setTimeout(function () {
                                capture(img);
                }, 800);

            }

            // Pour l'autocompletion
        	// Pour l'autocompletion


                var ville = [];
                var code_postal  = [];
                var complet = [];
                var complet2 = [];
                $.ajax({
                  url: 'lib/ville_cp.json',
                  type: 'POST',
                  dataType: "json",
                  success: function(data){
                    for(var i = 0; i < data.length; i++){
                      complet.push({ value : data[i].ville_nom_reel, desc: data[i].ville_code_postal});
                      complet2.push({ value : data[i].ville_code_postal, desc: data[i].ville_nom_reel});
                    }
                  },
                  error: function(xhr){
                    alert("Erreur de recuperation");
                  }
                });
                $('#villepatient').autocomplete({
                    source : complet,
                    minLength: 3,
                    select : function(event, ui){
                        $("#codepostalpatient").val(ui.item.desc);
                    }
                });
                $('#codepostalpatient').autocomplete({
                    source : complet2,
                    minLength: 3,
                    select: function(event, ui){
                        $("#villepatient").val(ui.item.desc);
                    }
                });



            $('#enregistrer').click(function () {
                $('#save').trigger('click');
            });

/*
            function capture(target){
                alert("On capture ! ");
            }
  */
            
            function capture(target) {
                var scrolL =  $('html,body').scrollTop();   
                var capture = {};
                var trg = $('#' + target);
            <?php echo " var id = '" . $_SESSION["id"] . "' + target;"; ?>
                html2canvas(trg, {
                    onrendered: function (canvas) {
                        capture.img = canvas.toDataURL("image/png");
                        capture.data = {'image': capture.img, 'id': id};
                        $.ajax({
                            url: "pdf/ajax.php",
                            data: capture.data,
                            type: 'post',
                            success: function (result) {

                            }
                        });
                    }
                });
            }


            $('#imprimer').click(function () {
                $("#form-filter").attr('action', 'content.php');
                $("#form-filter").attr('target', '_blank');
                $("#form-filter").submit();
            });

            $("input").keypress(function(event) 
            {
                if(event.which == 13)
                {
                    event.preventDefault();
                }
            });

            $('#save').click(function (e) { 
                e.preventDefault();
                $("#form-filter").attr('action', 'traitement.php');
                var form = $('#form-filter').get(0);
                var formData = new FormData(form);// get the form data
                // on envoi formData vers mail.php
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'traitement.php', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'text', // what type of data do we expect back from the server
                    processData: false,
                    contentType: false,
                    success: function (server_response)
                    {
                        if (server_response === "succes")
                        {
                            window.location.href = "page.php";
                        }
                        else
                        {
                            $('#erreur_inscription').html('<p>' + server_response + '</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 4000);
                        }
                    },
                    error: function (server_response)
                    {
                        $('#erreur_inscription').html('<p>' + server_response + '</p>');
                        $('#triggerwarning').trigger('click');
                        setTimeout(function () {
                            $('#ferme').trigger('click');
                        }, 4000);
                    }
                });
                
                setTimeout(function(){
                    $("#form-filter").attr('action', 'content.php');
                    $("#form-filter").submit();
                }, 800);   
            });



        </script>

    </article>
    </body>

</html>