## TrueFeedback
Develop Web Application and necessary APIs, to enable users to find and answer surveys. When a survey is completed the users are automatically paid feedback coin.
* Fully responsive web application across all platforms.
* Relatively Scalable Infrastructure for backend.
* User Registration and Account Management
* Business Registration and Account Management
* Business Dashboard
* User Dashboard
* Wallet Page (User/Business)
* Create Contract Page
* Surveys Page (User)
* Rewards Page (User)
* Ethereum Wallet Integration
* Reports and Statistics
* Payment Gateway Integration
* APIs for third party service providers
* Email Notifications
The project will be similar to [surveymonkey.com](https://surveymonkey.com) but we will be acting as a middle layer / common gateway and having multiple data providers similar to onfido.

Original Template : [Demo / Preview](https://zawiastudio.com/neat/demo/dashboard01.html), [Documentation](https://zawiastudio.com/neat/docs/), [UI Kit](https://zawiastudio.com/neat/demo/ui-kit.html)

## Running / Local Development
* Pull the repository
* Update composer `composer update`
* Clear composer configuration `composer dump-autoload`
* Migrate database `php artisan migrate`
* Seed Database `php artisan db:seed`

## Platforms & Stack
* Laravel 5.5
* MySQL
* [HashIds](https://github.com/ivanakimov/hashids.php)
* [JQuery Validation](https://jqueryvalidation.org/documentation/)

## Automatic Deployment
* Live URL: 
* Deployment without composer update: `localhost:{port}/deploy`
* Deployment with composer update: `localhost:{port}/deploy/composer`

## Database
Database and table structure can be identified [here](#)

## Functionalities
### User Dashboard
Pages | Functionality
------------ | -------------
Register | User Registration Page
Login | User Login Page
Dashboard | Home Page for User
Applications | List of KYC Requests generated from User
Settings | User Settings Page
API | Token Management and Integrations Guides
Credits | Credits Management (Usage Credits / Purchase)
FAQ | Frequently Asked Questions

### Admin Dashboard
Pages | Functionality
------------ | -------------
Login | Admin Login
Dashboard | Admin Login Dashboard (Necessary Widgets)
Customer Data | Customer Data List View and Single View
Payments | Payment Accounts, List View and Single View
Requests | KYC/AML Requests and Details
Access Tokens | List of Tokens Generated by Each Clients, Single View and Management
Reports | Reports based on different parameters.

### API Middle Layer Endpoint
The client will have to make API requests to use our KYC Verification service in their system. Each API request should be made using the API tokens generated from their dashboard for authentication purposes. Two set of API requests are, one is Document Upload Request and the other one is KYC Verification Request.
Documents should be uploaded before making a validation request, otherwise the request will be rejected.
There will be three requests required in-order to complete a KYC verification process. 2 Document Uploads and 1 KYC verification request.
* `Request` > Document Upload Request 1 - Address proof of a user. (Base64 format PDF / JPEG / PNG)
* `Response` > Document Unique Identifier (UID) and Upload status or Error Message.
* `Request` > Document Upload Request 2 - ID proof of a user. (Base64 format PDF / JPEG / PNG)
* `Response` > Document Unique Identifier (UID) and Upload status or Error Message.
* `Request` > KYC Validation Request - UIDs of both Document, User Information to cross validate.
* `Response` > KYC Validation Request ID and Status
* `CallBack` > CallBack will be made after successful completion of validation process from our service providers. It will validation result for each KYC Validation Request.

> We have to re route each of these request to third party providers and have to register callback to push the response back to client.

## Contributing Guides
### PHP Document Block for Functions
```PHP
/**
 * Brief about the functionality
 * @author Tittu Varghese (tittu@servntire.com)
 *
 * @param  variable_type | $variable
 * @param  bool  $shared
 * @return void //type
 */
```
### PHP Document Block for Files
```PHP
/**
 * BytaCoin - Functionality
 * PHP Laravel Version 5.5
 * Dependancy Eg. laravelcollective/remote > 5.4.*
 *
 * @author Name (email_alias@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
 */
```
### PHP Naming Conventions
```PHP
$variable = "Hello World";
$variableName = "Hello World";
function functionName() {
  // Code Goes Here
}
function function() {
  // Code Goes Here
}
class Class extends Controller {
  // Code Goes Here
}
class ClassName extends Controller {
  // Code Goes Here
}
```
### Laravel Template Naming Conventions
```PHP
/* Include Common Layouts under layouts folder */
/* File Naming: file-name.blade.php */
/* Section Naming: section_name */
```


