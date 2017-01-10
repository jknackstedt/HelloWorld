<?php

namespace Helloworld\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloworldServiceProvider extends serviceProvider
{

      /**
       * Register the service provider.
       */

       public function register()
       {
         $this->getApplication()->register(HelloworldRouteServiceProvider::class);
       }
}
