#!/bin/bash

# activate the virtual environment
. venv/bin/activate

# start vagrant vms
vagrant up

# copy the ssh key to the vms
ssh-copy-id vagrant@192.168.56.112
ssh-copy-id vagrant@192.168.56.113

# run the playbook
ansible-playbook -i inventory.ini plybook.yaml -u vagrant