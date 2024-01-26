@include('header')

<div class="container">
    <form class="search-form" style="margin-top: 25px;" action="{{ url('/search') }}">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Cautare ..." name="searchbox" id="searchbox" />
            <div class="input-group-append"><button class="btn btn-light" type="submit" style="background: #D4D4D4;">Cauta </button></div>
            
        </div>
        <input type="radio" name="nr_inmat" id="nr_inmat">&nbsp;Numar inmatriculare&nbsp;
        <input type="radio" name = "nume_prop" id="nume_prop">&nbsp;Nume proprietar&nbsp;
        <input type="radio" name = "nume_prop" id="nume_prop">&nbsp;&nbsp;
    </form>
    <div class="row product-list dev">
            @php
                $var = $carclassobj;
            @endphp

            <?php
                for($id = 0; $id < $var->getLen(); $id++)
                {
                    $xvar = $var->getData($id);
            ?>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a href="#" class="product-image"><img src=<?php echo $xvar->imagine; ?> alt="Masina"/></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#"><?php echo $xvar->marca . ' ' . $xvar->model; ?></a></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">
                                        <ul>
                                            <li>Tip autovehicul: <?php echo $xvar->tip_autovehicul; ?></li>
                                            <li>Marca: <?php echo $xvar->marca; ?></li>
                                            <li>Model: <?php echo $xvar->model; ?></li>
                                            <li>Date tehnice: <?php echo $xvar->date_tehnice; ?></li>
                                            <li>Alte caracteristici: <?php echo $xvar->alte_caracteristici; ?></li>
                                            <li>Numar de inmatriculare: <?php echo $xvar->numar_de_inmatriculare; ?></li>
                                            <li>Data inmatricularii: <?php echo $xvar->data_inmatriculare; ?></li>
                                            <li>Proprietarul: <?php echo $xvar->proprietar; ?></li>
                                            <li> Data ultimei revizii tehnice: <?php echo $xvar->data_ultim_itp; ?></li>
                                        </ul>
                                    </p>
                                    <div class="row">
                                        <div class="col-6"><a href=<?php echo "./editeaza/". $xvar->id ?>><button class="btn btn-light" type="button">Editeaza</button></a></div>
                                        <div class="col-6"><a href=<?php echo "./sterge/". $xvar->id ?>><button class="btn btn-light" type="button" style="float: right; background: #BA2A2A;">Sterge</button></a></div>
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