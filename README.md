## Kampernet Actions

This is a simple, dependency free implementation of the Command Pattern in PHP.  Useful for creating an orchestration layer

# Usage

This will create a group of Commands with a certain name.

        class RegisterAction extends ActionChain {

            public function __construct() {
                $this->add(new RegisterUserAction());
                $this->add(new SendWelcomeEmailAction());
            }

        }

These are the individual command examples

        class RegisterUserAction extends Command {

            public function execute($request) {

                $this->request = $request;

                // eg: code to take the request data and persist the user
                // probably more likely to call a service or domain model method here.
            }

            public function undo() {

                // eg: code to "undo" anything this command would have done
            }
        }

Once your commands are built, you can just call them from the routes: ( example using Symfony's Request )

        Route::get('/register', function() {

            $reg = new RegisterAction();
            $reg->execute(Request::createFromGlobals());
        });