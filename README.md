# php-docker-client

### How to use
```
composer require te4g/docker-client
```
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Te4g\DockerClient\DockerClient;

$client = DockerClient::create();

var_dump($client->containerList());
```

### How to build
1. Download the docker API definition from https://docs.docker.com/engine/api/latest/, save it as `open-api.yaml`
2. Follow the instructions about how to use Jane to generate the PHP classes from the API definition: https://jane.readthedocs.io/en/latest/
    a. Install the dependencies
    ```bash
   composer require jane-php/open-api-runtime
   composer require symfony/http-client
   composer require --dev jane-php/open-api-2
   composer require --dev friendsofphp/php-cs-fixer
   ```
    b. Create the Jane configuration file `.jane-openapi`
    ```php
    <?php
   
    return [
        'openapi-file' => __DIR__ . '/open-api.yaml',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];
    ```
   c. Generate the PHP classes
    ```bash
    php vendor/bin/jane-openapi generate
    ```
3. Update the `composer.json` file to include the generated classes
    ```json
    {
      "autoload": {
        "psr-4": {
          "Vendor\\Library\\Generated\\": "generated/"
        }
      }
    }
    ```
4. Run `composer dump-autoload` to update the autoloader
5. Try if it works by creating a new PHP file and adding the following code
    ```php
    <?php

   require __DIR__ . '/vendor/autoload.php';
   
   use Symfony\Component\HttpClient\Psr18Client;
   
   $httpClient = (new Psr18Client())->withOptions([
   'base_uri' => 'http://localhost',
   'bindto' => '/var/run/docker.sock'
   ]);
   
   $dockerClient = Vendor\Library\Generated\Client::create(httpClient: $httpClient);
   
   $containers = $dockerClient->containerList();
   
   foreach ($containers as $container) {
   echo $container->getId() . "\n";
   }
    ```
