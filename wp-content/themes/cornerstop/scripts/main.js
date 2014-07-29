require.config({ 
        enforceDefine: true, 
        shim: { 
             "underscore": { 
                  exports: "_" 
             },
            "jqueryui": {
                deps: ["jquery"],
                exports: "jQuery"
            }
        }, 
        paths: { 
             jquery: 'vendor/jquery-1.10.1.min',
             jqueryui: 'vendor/jquery-ui-1.10.3.custom.min', 
             underscore: 'vendor/underscore-min'
        } 
        
    }); 
    
    define(['app'], function(App){ 
         App.initialize(); 
    }); 