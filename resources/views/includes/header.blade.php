<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <button>{{ __('misc.homepage_title') }}</button>
            
        </a>
        <?php
        print_r($brand);
        ?>
        @yield('introduction_text')
    </div>
</div>
