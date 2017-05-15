<?php
require './protection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contrôle</title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        <style type="text/css">

            body
            {
                background: url("img/bg5.jpg") no-repeat center fixed;
                background-size: cover;
                -webkit-background-size: cover;
            }

            .well
            {
                background: rgba(10, 10, 10, 0.51);
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                border-radius: 10px;
                -webkit-box-shadow: inset 0 1px 1px rgba(233,101,25,.3);
                box-shadow: inset 0 1px 1px rgba(233,101,25,.3);
            }

            h4
            {
                color: yellowgreen;
                font-size: 1.8em;
            }

            .filterable {
                margin-top: 15px;
            }
            .filterable .panel-heading .pull-right {
                margin-top: -20px;
            }
            .filterable .filters input[disabled] {
                background-color: transparent;
                border: none;
                cursor: auto;
                box-shadow: none;
                padding: 0;
                height: auto;
            }
            .filterable .filters input[disabled]::-webkit-input-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]::-moz-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]:-ms-input-placeholder {
                color: #333;
            }

        </style>

        <script src="jquery/jquery-2.1.4.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>

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
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!--                        <li><a href="./essai.php">essai</a></li>-->
                        <li><a href="./lumiere.php"><img width="33px" src="./img/help.png" /></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img width="33px" src="./img/pignon.png" /> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./modification.php">Modifier mon profil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./logout.php">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 70px;">
            <div class="row">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">LISTE DES PATIENTS</h3>
                        <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrer </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Prenom" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Adresse" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Téléphone" disabled></th>
                                </tr>
                            </thead>

                            <tbody id="myTable">
                                <?php
                                require 'cnx.php';

                                $reponse = $bdd->query("SELECT * FROM infopatient WHERE idPrescripteur = '" . $_SESSION['id'] . "'");

                                while ($donnees = $reponse->fetch()) {
                                    ?>

                                    <tr>
                                        <td style="width: 20%;"><?php echo $donnees['nompatient']; ?></td>
                                        <td style="width: 20%;"><?php echo $donnees['prenompatient']; ?></td>
                                        <td style="width: 40%;"><?php echo $donnees['adressepatient']; ?></td>
                                        <td style="width: 20%;"><?php echo $donnees['mobilepatient']; ?></td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="bg-primary">
                                        <div class="col-md-12 text-center">
                                            <ul class="pagination pager" id="myPager"></ul>
                                        </div>
                                    </td> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            $.fn.pageMe = function (opts) {
                var $this = this,
                        defaults = {
                            perPage: 7,
                            showPrevNext: false,
                            hidePageNumbers: false
                        },
                settings = $.extend(defaults, opts);

                var listElement = $this;
                var perPage = settings.perPage;
                var children = listElement.children();
                var pager = $('.pager');

                if (typeof settings.childSelector != "undefined") {
                    children = listElement.find(settings.childSelector);
                }

                if (typeof settings.pagerSelector != "undefined") {
                    pager = $(settings.pagerSelector);
                }

                var numItems = children.size();
                var numPages = Math.ceil(numItems / perPage);

                pager.data("curr", 0);

                if (settings.showPrevNext) {
                    $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
                }

                var curr = 0;
                while (numPages > curr && (settings.hidePageNumbers == false)) {
                    $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
                    curr++;
                }

                if (settings.showPrevNext) {
                    $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
                }

                pager.find('.page_link:first').addClass('active');
                pager.find('.prev_link').hide();
                if (numPages <= 1) {
                    pager.find('.next_link').hide();
                }
                pager.children().eq(1).addClass("active");

                children.hide();
                children.slice(0, perPage).show();

                pager.find('li .page_link').click(function () {
                    var clickedPage = $(this).html().valueOf() - 1;
                    goTo(clickedPage, perPage);
                    return false;
                });
                pager.find('li .prev_link').click(function () {
                    previous();
                    return false;
                });
                pager.find('li .next_link').click(function () {
                    next();
                    return false;
                });

                function previous() {
                    var goToPage = parseInt(pager.data("curr")) - 1;
                    goTo(goToPage);
                }

                function next() {
                    goToPage = parseInt(pager.data("curr")) + 1;
                    goTo(goToPage);
                }

                function goTo(page) {
                    var startAt = page * perPage,
                            endOn = startAt + perPage;

                    children.css('display', 'none').slice(startAt, endOn).show();

                    if (page >= 1) {
                        pager.find('.prev_link').show();
                    }
                    else {
                        pager.find('.prev_link').hide();
                    }

                    if (page < (numPages - 1)) {
                        pager.find('.next_link').show();
                    }
                    else {
                        pager.find('.next_link').hide();
                    }

                    pager.data("curr", page);
                    pager.children().removeClass("active");
                    pager.children().eq(page + 1).addClass("active");

                }
            };

            $(document).ready(function () {

                $('#myTable').pageMe({pagerSelector: '#myPager', showPrevNext: true, hidePageNumbers: false, perPage: 10});

            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.filterable .btn-filter').click(function () {
                    var $panel = $(this).parents('.filterable'),
                            $filters = $panel.find('.filters input'),
                            $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function (e) {
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9')
                        return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                            inputContent = $input.val().toLowerCase(),
                            $panel = $input.parents('.filterable'),
                            column = $panel.find('.filters th').index($input.parents('th')),
                            $table = $panel.find('.table'),
                            $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function () {
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' + $table.find('.filters th').length + '">Aucun patient ne correspond a votre recheche</td></tr>'));
                    }
                });
            });
        </script>

    </body>
</html>