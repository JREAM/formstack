# Formstack Demo

This is a PHP and Python Example.

## Instructions
- `npm install`
- `pip install -r python/requirements.txt`
    - **Note**: You can optionally install the Python Virtualenv below.
- `cd php && composer update`

## Optional Python
(Otional) If you'd like to install a virtual environment with a super tiny footprint
you can run:

```
pip install virtualenv
```

It's easier in this example to use virtualenv than setting up `virtualenvwrapper` 
and it's hooks, although it'd be the ideal  method.

**Setup the VirtualEnv**
```
cd python
virtualenv venv
source venv/bin/activate
pip install -r requirements.txt
```

Then all of your requirements are in the `/venv` folder.
To exit the venv just type `deactivate`.

## Running Apps
- php: Load browser to `index.php`
- python: `$ ./app.py`

