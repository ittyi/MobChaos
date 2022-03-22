#start apache server
systemctl restart httpd
systemctl is-active httpd
systemctl enable httpd


#firewall settings
firewall-cmd --zone=public --add-service=http --permanent
firewall-cmd --reload             