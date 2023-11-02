@include('header')

<div class="container">
    <form class="bootstrap-form-with-validation" style="margin-top:10px;">
        <h2 class="text-center">Adauga vehicul</h2>
        <div class="form-group"><label for="text-input">Text Input</label><input class="form-control" type="text" name="text-input" id="text-input" /></div>
        <div class="form-group"><label for="password-input">Password Input</label><input class="form-control" type="password" name="password-input" id="password-input" /></div>
        <div class="form-group"><label for="email-input">Email Input</label><input class="form-control" type="email" name="email-input" id="email-input" /></div>
        <div class="form-group"><label for="textarea-input">Textarea </label><textarea class="form-control" name="textarea-input" id="textarea-input"></textarea></div>
        <div class="form-group"><label for="search-input">Search Input Group</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="search" name="search-input" id="search-input" /></div>
        </div>
        <div class="form-group"><label for="file-input">File Input</label><input type="file" name="file-input" id="file-input" /></div>
        <div class="form-group">
            <div class="form-check"><input class="form-check-input" type="checkbox" name="checkbox-input" id="formCheck-13" /><label class="form-check-label" for="formCheck-13">Checkbox</label></div>
        </div>
        <div class="form-group">
            <div class="form-check"><input class="form-check-input" type="radio" name="radio-group" id="formCheck-14" /><label class="form-check-label" for="formCheck-14">Radio</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" name="radio-group" checked id="formCheck-15" /><label class="form-check-label" for="formCheck-15">Radio</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" name="radio-group" id="formCheck-16" /><label class="form-check-label" for="formCheck-16">Radio</label></div>
        </div>
        <div class="form-group"><label>Static Control</label><input class="form-control-plaintext" type="text" value="A basic template showing the proper way to create bootstrap forms using form group components, labels and input fields." readonly /></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">Button</button></div>
    </form>
</div>

@include('footer')