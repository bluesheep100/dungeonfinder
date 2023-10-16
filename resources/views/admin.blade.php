<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pt-2 bg-secondary rounded">
                <x-tab-nav :tabs="$navTabs">
                    <x-tab-pane id="race-tab" :active="true" :show="true">
                        dig bigger nick
                    </x-tab-pane>

                    <x-tab-pane id="class-tab">
                        Communism :)
                    </x-tab-pane>

                    <x-tab-pane id="spell-tab">
                        <x-partials.spell-form/>
                    </x-tab-pane>

                    <x-tab-pane id="feat-tab">
                        Amongst us
                    </x-tab-pane>

                    <x-tab-pane id="monster-tab">
                        Amongst us
                    </x-tab-pane>
                </x-tab-nav>
            </div>
        </div>
    </div>
</x-layouts.app>
