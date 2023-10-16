<form method="post" action="{{ route('spells.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <x-forms.input name="name"/>
        </div>
        <div class="col">
            <x-forms.select name="school" :options="App\Models\Spell::SCHOOLS"/>
        </div>
        <div class="col">
            <x-forms.input name="tier" type="number" value="0" min="0" max="9"/>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <x-forms.input name="components"/>
        </div>
        <div class="col">
            <x-forms.input name="target"/>
        </div>
        <div class="col">
            <x-forms.input name="range"/>
        </div>
    </div>

    <div class="row">
        <div class="col col-md-4">
            <x-forms.input name="casting_time"/>
        </div>
        <div class="col col-md-4">
            <x-forms.input name="duration"/>
        </div>
    </div>

    <x-forms.textarea name="description"/>

    <button class="btn btn-success float-end" type="submit">
        Create
    </button>

    <div class="clearfix"></div>
</form>
