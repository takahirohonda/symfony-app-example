# Symfony Knowledge

## (1) HTTP Processing Workflow in Symfony

1. The browser sends a request to Symfony on the server from the user action.
2. Symfony create a **Request** object that contains data sent by the user (e.g. form data, url parameters etc.).
3. Symfony generates a **Response** object using the data of the Request object
4. Symfony through the server sends back the response to the browser and it display the respoinse to the user

# (2) MVC in Symfony

## Route

### 1. From controller

Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.

```bash
bin/console make:controller DefaultController
```

Then you can see the route is defined in the controller

```php
/**
 * @Route("/default", name="default")
 */
public function index(): Response {
  ...
}
```

### 2. From config/routes.yml

Go to config/routes.yaml. This file defines the routing in Symfony.

```yaml
index:
   path: /home
   controller: App\Controller\DefaultController::index
```

Create a default controller as src/Controller/DefaultController.php

```php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('<p>Hello!</p>');
    }
}
```
