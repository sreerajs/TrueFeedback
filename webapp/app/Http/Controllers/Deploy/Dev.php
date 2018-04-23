<?php
/**
 * BytaCoin - Automatic Deployment - Development
 * PHP Laravel Version 5.5
 * Dependancy laravelcollective/remote > 5.4.*
 *
 * @author Tittu Varghese (tittu@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
 */

namespace App\Http\Controllers\Deploy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Collective\Remote\RemoteFacade as SSH;

class Dev extends Controller
{
  /**
  * Automated Deployment without Composer Update
  * @author: Tittu Varghese (tittu@servntire.com)
  */
  protected function deploy() {
    $ssh = SSH::into('production')->define('deploy', [
      'cd /var/www/html/bytacoin.servntire.com',
      'git pull origin master',
      'cd webapp',
      'php artisan config:clear',
      'php artisan cache:clear',
      #'composer update',
      #'php artisan migrate',
    ]);
    $ssh->task('deploy', function($line)
    {
      echo $line.PHP_EOL."<br/>";
    });
  }

  /**
  * Function: Automated Deployment with Composer Update
  * @author: Tittu Varghese (tittu@servntire.com)
  */

  protected function deployComposer() {
    $ssh = SSH::into('production')->define('deploy', [
      'cd /var/www/html/bytacoin.servntire.com',
      'git fetch --all',
      'git reset --hard origin/master',
      'git pull origin master',
      'cd webapp',
      'composer update',
      'php artisan config:clear',
      'php artisan cache:clear',
      'php artisan migrate',
    ]);
    $ssh->task('deploy', function($line)
    {
      echo $line.PHP_EOL."<br/>";
    });
  }

  /**
  * Function: Automated Deployment with Database Migrate
  * @author: Tittu Varghese (tittu@servntire.com)
  */

  protected function deployMigrate() {
    $ssh = SSH::into('production')->define('deploy', [
      'cd /var/www/html/bytacoin.servntire.com',
      'git pull origin master',
      'cd webapp',
      'php artisan migrate',
      'php artisan db:seed',
      'php artisan config:clear',
      'php artisan cache:clear',
    ]);
    $ssh->task('deploy', function($line)
    {
      echo $line.PHP_EOL."<br/>";
    });
  }
}
