# laravel-objects
Package to handle HTML Elements and Boostrap 4 CSS with PHP Objects

      
      class IndexController extends Controller
      {
            public function index(ObjectView $objectView)
            {
                  //Creating and div object and recording into a attribute (to be easylly acessible from closure)
                  $this->objectView1 = clone $objectView->div(function($div){
                        
                        return $div->setAsRenderable();
                  });

                  //Creating a span object, not will be rendered
                  $this->spanTeste = clone $objectView->span('Span teste');

                  //Creating a div object
                  $objectView->div(function($div){

      
                        $div->setAsRenderable();
                        
                        //Creating a button object inside a div object
                        $div->button('button',function($on) {
                              
                              //Setting style bootstrap success
                              $on->setSuccessButton();
                              
                              //Setting click event on button object
                              $on->click(function($e){
                                    
                                    //On click fill the first object with the span object
                                    $this->objectView1->fillWith($e,$this->spanTeste);
                                    
                                    //necessary 
                                    $e->injectScript($this->objectView1);

                              });
                        });

                  });
                  
              return view( 'index',['objects' => $objectView->render()]);
          }
    }
