#!/usr/bin/env python
# -*- coding: utf-8 -*-
import sys
import codecs

from poyo import parse_string, PoyoException
import requests as r

# ---------------------------------------------------------
# Read the YML Config to run our CLI App
# ---------------------------------------------------------
with codecs.open('../config/api.yml', encoding='utf-8') as config:
    yml = config.read()
try:
    config = parse_string(yml)
except PoyoException as e:
    print e
    sys.exit

print config

# ---------------------------------------------------------
# List API Calls for User
# ---------------------------------------------------------
print """
    Command | API
    ------------------------------------------------------
     list           | List all your forms
     details <int>  | get details on specific form
     q              | quit/exit
     Other details from api, make it cool
"""

cmd = raw_input("Command: ")

print cmd

class ApiClient():

    def list(self, id=False):
        pass

    def details(self):
        pass

    def q(self):
        sys.exit


