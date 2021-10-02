<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @yield('head')
</head>
<body>

@include('includes.navbar')

<div class="container">
    <div class="row">

        <div class="col-md-8">
            @include('includes.header')

            
           
                @if ( isset($_GET['q']) )
                    @include('includes.search_results')
                @else
                <div class="manual">
                    @yield('content')
                @endif
                 </div>
            <ul class="breadcrumb">
                <li><a href="/" title="{{ __('misc.home_alt') }}"
                       alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}</a></li>
                @yield('breadcrumb')
            </ul>


            <ul class="breadcrumb">
                <li>
            <div class="loginkButtonHomepage"> 
                <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}>  
                        
                </a>  
                                
            </div>
            
    
				</li>
                @yield('breadcrumb')
            </ul>

        </div>

        

    </div>


</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>//window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{ asset('/js/app.js') }}"></script>

</body>
        <div class="row">
            @include('includes.footer')
        </div>

</html>
