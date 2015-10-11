#!/bin/bash
# base64 encodes an image and sends it to a sql table
for i in $@
do
  b64=`cat $i | base64`
  sql_command="INSERT INTO photos (name,data) VALUES (\"${i}\",\"${b64}\");"
  echo $sql_command 
done
