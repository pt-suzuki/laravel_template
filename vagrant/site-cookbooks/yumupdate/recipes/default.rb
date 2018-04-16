execute "yum-update" do
  user "root"
  command "yum -y update"
  action :run
end

execute "disableselinux" do
  user "root"
  command "setenforce 0"
  action :run
end
