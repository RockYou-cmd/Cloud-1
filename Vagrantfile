# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.define "spinoza" do |vagrant|
      # config.vm.box = "ubuntu/focal64"
      config.vm.box = "ubuntu/bionic64"
      # config.vm.box = "bento/debian-11"
      vagrant.vm.hostname = "spinoza"
      vagrant.vm.network "public_network"
      # vagrant.vm.network "forwarded_port", guest: 433, host: 433
      vagrant.vm.provider "virtualbox" do |vb|
        vb.memory = 512
        vb.cpus = 1
        vb.name = "Spinoza"
      end
    end
    config.vm.define "spinoza2" do |vagrant2|
      # config.vm.box = "ubuntu/focal64"
      config.vm.box = "ubuntu/bionic64"
      # config.vm.box = "bento/debian-11"
      vagrant2.vm.hostname = "spinoza2"
      vagrant2.vm.network "public_network"
      # vagrant2.vm.network "forwarded_port", guest: 433, host: 8080
      vagrant2.vm.provider "virtualbox" do |vb|
        vb.memory = 512
        vb.cpus = 1
        vb.name = "Spinoza2"
      end
    end
end
