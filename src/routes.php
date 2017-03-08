       <?php
       $routes = [
       'getVATPrice',
       'getVATRateList',
       'getVATRate',
        'validateVATNumber',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

