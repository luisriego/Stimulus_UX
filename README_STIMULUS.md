# How to use Stimulus

## Init

### Link the css and the js with the Encore
in assets/styles/app.css and assets/app.js load the .css and the .js

    # base.html.twig
    // This function will take care of including any other generated files.

    <!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="UTF-8">
            <title>{% block title %}MVP Office Supplies{% endblock %}</title>
            {% block stylesheets %}
                {{ encore_entry_link_tags('app') }}
            {% endblock %}
        
            {% block javascripts %}
                {{ encore_entry_script_tags('app') }}
            {% endblock %}
    ...

Please, webpack_encore must be script_attributes to true

    # config/packages/webpack_encore.yaml

    # Set attributes that will be rendered on all script and link tags
    script_attributes:
        defer: true
        # Uncomment (also under link_attributes) if using Turbo Drive
        # https://turbo.hotwired.dev/handbook/drive#reloading-when-assets-change
        # 'data-turbo-track': reload

Then 

    $ yarn --watch

if we need bootstrap

    $ yarn add bootstrap --dev

and import it on assets/styles/app.css

    @import '~bootstrap';
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');

    ...


### Create our first stimulus controller

    # assets/controllers/controllerName_controller.js

    import { Controller } from "@hotwired/stimulus";

    export default class extends Controller {
        connect() {
            ...
        }
    }
}

and in the template you want to use, include the bellow line in the place you want to perform 

    <div data-controller="controllerName">
        ...
    </div>