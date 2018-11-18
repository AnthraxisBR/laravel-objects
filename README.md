# laravel-objects
Package to handle HTML Elements and Boostrap 4 CSS with PHP Objects

      
      class IndexController extends Controller
      {
            public function index(ObjectView $objectView)
            {
                  $this->objectView1 = clone $objectView->div(function($div){

                        return $div->setAsRenderable();
                  });

                  $this->spanTeste = clone $objectView->span('Span teste');

                  $objectView->div(function($div){

                        $div->setAsRenderable();
                        
                        $div->button('button',function($on) {

                              $on->setSuccessButton();

                              $on->click(function($e){

                                    $this->objectView1->fillWith($e,$this->spanTeste);

                                    $e->injectScript($this->objectView1);

                              });
                        });

                  });

              return view( 'index',['objects' => $objectView->render()]);
          }
    }
