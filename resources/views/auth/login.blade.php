<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 bg-secondary rounded p-3">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <x-forms.input name="username" autocomplete="username" autofocus/>

                    <x-forms.input name="password" type="password"/>

                    <button type="submit" class="btn btn-outline-success float-end">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
