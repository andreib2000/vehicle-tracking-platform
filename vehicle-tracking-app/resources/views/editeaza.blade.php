@include('header')

<div class="container">
    <form name="adauga-vehicul" id="adauga-vehicul" class="bootstrap-form-with-validation" style="margin-top:10px;" method="post" action = <?php echo "/modify/" . $id; ?>>    
        <h2 class="text-center">Adauga vehicul</h2>
        @csrf
        <div class=form-group><label for="tip_autoturism">Tip Autovehicul</label>
            <select class="custom-select" name="tip_autoturism" id="tip_autoturism">
                @if($tip_autovehicul == 'autoturism')
                {
                    <option selected value="autoturism">Autoturism</option>
                    <option value="autoutilitara">Autoutilitara</option>
                    
                }
                @else
                {
                    <option value="autoutilitara">Autoutilitara</option>
                    <option selected value="autoturism">Autoturism</option>
                }
                @endif
            </select>
        </div>

        <div class="form-group"><label for="marca">Marca</label><input class="form-control" type="text" name="marca" id="marca" value = "{{ $marca }}" /></div>
        <div class="form-group"><label for="model">Model</label><input class="form-control" type="text" name="model" id="model" value="{{$model}}" /></div>
        <div class="form-group"><label for="imagine">Imagine</label><input class="form-control" type="text" name="imagine" id="imagine" value="{{ $imagine }}" /></div>
        <div class="form-group"><label for="numar_inmatriculare">Numar de inmatriculare</label><input class="form-control" type="text" value="{{ $nr_inmatriculare }}" name="numar_inmatriculare" id="numar_inmatriculare" /></div>

        <div class="form-group"><label for="date_tehnice">Date tehnice </label><textarea class="form-control" name="date_tehnice" id="date_tehnice">{{ $date_tehnice }}</textarea></div>
        <div class="form-group"><label for="alte_caracteristici">Alte caracteristici </label><textarea class="form-control" name="alte_caracteristici" id="alte_caracteristici">{{ $alte_carac }}</textarea></div>

        <div class="form-group"><label for="proprietar">Proprietar</label><input class="form-control" type="text" name="proprietar" value="{{ $proprietar }}" id="proprietar" /></div>
        <div class="form-group"><label for="data_itp">Data ITP (format AN-LUNA-ZI)</label><input class="form-control" type="text" value="{{ $data_itp  }}" name="data_itp" id="data_itp" /></div>

        <div class="form-group"><button class="btn btn-primary" type="submit">Editeaza</button></div>
    </form>
</div>

@php
    $popup = $ok;
@endphp

<?php
    if($popup == 1)
    {
        echo '<script>alert("Datele au fost actualizate cu succes in baza de date!")</script>'; 
    }
    else
    {
        if($popup == 0)
        {
            echo '<script>alert("Datele nu sunt valide!")</script>'; 
        }
    }
?>

@include('footer')

