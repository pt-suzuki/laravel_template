execute "php" do
  user "root"
  command "yum -y install --enablerepo=remi,remi-php71 php php-cli php-common php-pgsql php-devel php-fpm php-gd php-mbstring php-mysqlnd php-pdo php-pear php-pecl-apcu php-soap php-xml php-xmlrpc"
  action :run
end

template "www.conf" do
  path   "/etc/php-fpm.d/www.conf"
  source "www.conf.erb"
  owner "root"
  group "root"
  mode   0644
end

service "php-fpm" do
  supports status: true, restart: true, reload: true
  action [:enable, :start]
end

# composer
bash 'install_composer' do
  not_if { File.exists?("/usr/local/bin/composer") }
  user 'root'
  cwd '/tmp'
  code <<-EOH
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/tmp
    mv /tmp/composer.phar /usr/local/bin/composer
  EOH
end
