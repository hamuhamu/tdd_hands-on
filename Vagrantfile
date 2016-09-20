# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = 2
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # https://docs.vagrantup.com

  config.vm.box = "ARTACK/debian-jessie"
  config.vm.box_url = "ARTACK/debian-jessie"
  # config.vm.synced_folder "host_path", "guest_path"
  config.vm.synced_folder ".", "/vagrant"
  # ボックスのアップデートチェック
  config.vm.box_check_update = false
  config.vm.network "private_network", ip: "192.168.33.10"
  # プロビジョニング
  config.vm.provision :shell, :path => "provision.sh"
end
