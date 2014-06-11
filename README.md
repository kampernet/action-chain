## Kampernet Actions

This is a simple, dependency free implementation of the Command Pattern in PHP.  Useful for creating an orchestration layer

# Usage

        class RegisterAction extends ActionChain {

            public function __construct() {
                $this->add(new RegisterUserAction());
                $this->add(new SendWelcomeEmailAction());
            }

        }

This will create a group of Commands with a certain name.

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