#!/bin/bash
vagrant up
vagrant ssh -c ". ~/environments/my_env/bin/activate && cd ~/names && jupyter notebook"
