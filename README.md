![Hero Section](public\img\docs\Hero.png)

<p align="center">
    <a href="https://skillicons.dev">
        <img src="https://skillicons.dev/icons?i=html,css,bootstrap,laravel,tailwind,mysql,npm,nodejs,vscode" />
    </a>
</p>

<div align="center">

[![License](https://img.shields.io/badge/License-MIT-blue)](#license) [![issues - MK_app-pegawai](https://img.shields.io/github/issues/Quackeyikz/MK_app-pegawai)](https://github.com/Quackeyikz/MK_app-pegawai/issues) ![hai](https://img.shields.io/badge/Maintenance-Probably-blue)

</div>

<p align="center">A CRUD web-app using <b>Laravel 11 and MySQL</b>. A framework trial app to learn Laravel Framework from the very beginning as a lecture project.</p>

<p align="center">
<i><b>Disclaimer:</b> This project is made <b>WITHOUT</b> the influence of Generative AI (Artifical Intelligence), any mistakes or wrong labeling is totally on me.</i>
</p>

---

### ✨ The Looks
I love how the pages turns out, utilizing [TailwindCSS UI-Blocks](https://tailwindcss.com/plus/) (template) for the hero and its header section. The chosen template comes with some beautiful background gradient as you can see from the image. Said gradients then utilized as a component in this project.  

![Table Section](public\img\docs\Read_Fetch_Table_List.png) 

By using TailwindCSS, it is very easy to customize **both light and dark theme** simultaniously. You can view it by changing the browser appearance setting.

![Table Section](public\img\docs\Read_Fetch_Table_List_Light.png)  

## 💠 Features

#### (C) Create
To create a row of data — Using the route of `/employees/create`, a form will appear that ask you to fill out name, email, number, etc. accordin to the table structure. The table schema could be found in the [`database/migrations`](database/migrations/) folder.
The whole process of basic *employee* CRUD could be read in the [`EmployeeController.php`](app/Http/Controllers/EmployeeController.php) file, there you can see the flow of function calling and routes being passed. (See also [`web.php`](routes/web.php)).

![Create Section](public\img\docs\Create_Form_Data.png)  

#### (R) Read
To display data in the table — Displaying a whole bunch of rows is started by creating a request to the database using `$employees = Employee::latest()->paginate(5);`. This line of code will display 5 rows of data from the *employees* table. Changing the parameter inside `paginate()` will result to display the respective amount of inputted digit. By entering a number after the `/employees` route will result on displaying the data according to the `id` from the table.  

![Read Section](public\img\docs\Details_Employee_Info.png)  

#### (U) Update
Updating data from the specified `id` — A new page will appear if the info button from the employee list table is clicked. The button will redirect to a route with a digit at the end (refer to the employee blade files and the controller to see the flow). A fetch request will be made with a specified `id` by `$employee = Employee::find($id);`, then it will return a view of blade file from the employee folder by `return view('employee.show', compact('employee'));` (compacted result). The forms will retain its data from the table.  

![Update Section](public\img\docs\Update_Page_Info.png)  

#### (D) Delete
Deleting a row of data using an `id` — By using a function called `destroy()` from the controller, a row of data with the same specified `id` will be deleted. Then, the page will be redirected to `employees.index` or the employee list page using `return redirect()->route('employees.index');`  

![Delete Section](public\img\docs\Delete_Prompt.png)  

## 🌊 Flow In The Making
After making so many laravel projects without learning it, I can finally come to a conclusion that the starting flow is actually quite manageable. The process in the beginning is more focused on creating a solid foundation, for example: **master templates, reusable components, table migrations, package installation, and controller** to handle flow. Oh and, don't forget to setup your ENV according to your back-end state. Why? Because everybody's machines is different.  

*So that's why, I have written these commands to help you go through the documentation hell that you don't even need.*

Creating a project:
```bash
composer create-project laravel/laravel:^11.0 app-pegawai
```
*Needs composer and PHP installed, set the PATH too.*  

##### Running the App:
The app should be running on a localhost on specified port (written in the terminal).
```php
php artisan serve
```  

##### Views
A view holds the purpose to display data or page to the user. In Laravel, using `myfile.blade.php` templating engine to create dynamic (modularity) and logic execution even. Views are stored in the [`resources/views`](resources/views/) folder, and could be made by simply using `touch` or normal way to create a file.  
```html
<h1>Hello {{ $user }}!</h1>
```
Those curly brackets acts as the `echo` command just like in PHP. The value is given by either controller or route (web.php). For example:   
```php
Route::get('/', function () {
    return view('welcome', ['name' => 'Quackeyikz']);
});
```
At the route `'/'` using the `GET` method, it will return a view (file) by the name of `'welcome.blade.php'`, and also passing a variable named `'name'` that has a string value of `'Quackeyikz'`. The page will display "Hello Quackeyikz!".  

Making Layout:
```php
<head>
    @yield('head')
    <title>@yield('title', 'defaultTitle')</title>
</head>
<body>
    @yield('content')
</body>
```  
Using layout:
```php
@extends('folderName.fileName') // Will inherits all of its content
@section('title', 'myNewTitle')

@section('content')
    // My new content
@endsection
```  

Create a component (with class):
```php
php artisan make:component myComponent
```  
Create a view component (no class):  
```php
php artisan make:component myComponent --view
```
Defining component:  
```html
<div {{ $attributes }} style="another-attribute" {{ $myAtt ? 'ifTrue' : 'ifFalse' }}>
    Hi this is the content: {{ $slot }}
</div>
```
Using a component:  
```html
<x-my-component href="/" :myAtt="">The Slot<x-my-component>
```  
Components will be stored in the same `views` folder, and its classes will be placed in [`App/View/Components`](App/View/Components/).

##### Migrations
Creating a migration file:
```php
php artisan make:migration create_employees_table
```  
Migration with specific table:
```php
php artisan make:migration create_employees_table --create=employees
```  
Running Migration (will run `up()` function):
```php
php artisan migrate
```  
Rollback:
```php
php artisan migrate:rollback
```  
Migration is a database management system with code (not manual). It can manage schema version control, team collaboration, deployment across environments (very important), and rollbacks if any errors were made.


##### Controllers
Controller:
```php
php artisan make:controller myController
```
Resource Controller (CRUD):  
```php
php artisan make:controller myController --resource
```
Controller with Model:  
```php
php artisan make:controller myController --model=Employee
```
Controller API Resource:   
```php
php artisan make:controller myController --api
```  
Using controller, requests and responses could be executed and redirected to views.  

##### Model
Create a model:  
```php
php artisan make:model Employee
```  
Interaksi dengan database menggunakan konsep *object*. Kata lain dari *Eloquent*, merupakan fitur Object Relational Mapping (ORM) pada Laravel.
```php
// Contoh-Contoh penggunaan
Employee::all();

Employee::paginate($id);

Employee::find($id);

Employee::create([
    'name' => $request->name,
    'address' => $request->address
]);

$employee = Employee::find(1);
$employee->delete();
```

##### Middleware   
Creating a Middleware:
```php
php artisan make:middleware myMiddleware
```
Middleware is a mechanism to do a **filtering** over HTTP request. Its a layer between request and responses. For example, *middleware is what to use to check if a user if authenticated before processing*. If register haven't been made yet, it'll return the user to the login page. If already registered, continue the request/process. Middlewares are saved in the `app/Http/Middleware`.

## 💫 Last Words
Reflecting my actions by making many Laravel projects without actually learning on how it works really put heavy burdens on my shoulder. I've been trying to make a good and quick-to-read documentations about all sort of things including Laravel basics. This is a concept included in this web app:

![What Ive Learned Section](public\img\docs\Learning_WIP.png)  

![What Ive Learned Section](public\img\docs\Learning_WIP_Light.png)  

I will implement these in a quick-access form using HTML and CSS. And I am planning to put it in the github.io domain. This is the planned route, not up right now but hey! Tell me if you read this and can access this in the future:

### [https://quackeyikz.github.io/ref/](https://quackeyikz.github.io)  

Thank you! I hope this documentation provide a benefit, or any benefit at all.

## Credits
- **[Laravel](https://laravel.com/)**
- **[TailwindCSS](https://tailwindcss.com/)**
- **[TailwindCSS UI Blocks](https://tailwindcss.com/plus)**
- **[Bootstrap Icons](https://icons.getbootstrap.com/)**
- **[Laragon](https://laragon.org)**

Written and developed by [@Quackeyikz](https://github.com/Quackeyikz).