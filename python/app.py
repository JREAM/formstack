#!/usr/bin/env python
# -*- coding: utf-8 -*-
from flask import Flask
import requests as r

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html', name='home')

@app.route('/form/')
def form():
    return render_template('form.html', name='form')


@app.route('/form/post', methods=['POST'])
def post():
    return "process the post"
