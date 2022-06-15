# Singleton vs Bind


## What is Singleton?

### PHP
In a nutshell, in PHP, singleton a process where class cannot be instantiate more than one time of entire application lifetime. Once it instantiated, after that it will return the same object.

### Laravel
According to [Laravel Docs](https://laravel.com/docs/9.x/container#binding-a-singleton)

> The singleton method binds a class or interface into the container that should only be resolved one time. Once a singleton binding is resolved, the same object instance will be returned on subsequent calls into the container:

That means, in architectural point of view, both of them are same.





### Purpose?
One of the common use of singleton is **DB Connection**. In the whole application lifetime, it required **DB Connection** once and reuse it. No need to establish the new connection in every call.


## What is Bind?
-

## Purpose?
-
