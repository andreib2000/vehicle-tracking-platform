@include('header')

<div class="container">
    <form class="search-form" style="margin-top: 25px;">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Cautare ..." />
            <div class="input-group-append"><button class="btn btn-light" type="button" style="background: #D4D4D4;">Cauta </button></div>
            
        </div>
        <input type="radio" name="group1">&nbsp;Numar inmatriculare&nbsp;
        <input type="radio" name = "group1"
        >&nbsp;Nume proprietar
    </form>
    <div class="row product-list dev">
            @php
                $var = $carclassobj;
            @endphp

            <?php
                for($id = 0; $id < $var->getLen(); $id++)
                {
            ?>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a href="#" class="product-image"><img src=<?php echo $var->getImagine($id); ?> /></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#"><?php echo $var->getMarca($id) . ' ' . $var->getModel($id); ?></a></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">
                                        <ul>
                                            <li>Tip autovehicul: <?php echo $var->getTip($id); ?></li>
                                            <li>Marca: <?php echo $var->getMarca($id); ?></li>
                                            <li>Model: <?php echo $var->getModel($id); ?></li>
                                            <li>Date tehnice: <?php echo $var->getDateTehnice($id); ?></li>
                                            <li>Alte caracteristici: <?php echo $var->getAlteCaracteristici($id); ?></li>
                                            <li>Numar de inmatriculare: <?php echo $var->getNumarDeInmatriculare($id); ?></li>
                                            <li>Data inmatricularii: <?php echo $var->getDataInmatriculare($id); ?></li>
                                            <li>Proprietarul: <?php echo $var->getProprietar($id); ?></li>
                                            <li> Data ultimei revizii tehnice: <?php echo $var->getDataUltimITP($id); ?></li>
                                        </ul>
                                    </p>
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button">Editeaza</button></div>
                                        <div class="col-6"><button class="btn btn-light" type="button" style="float: right; background: #BA2A2A;">Sterge</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php

                }
            ?>
        </div>
    </div>
</div>

@include('footer')