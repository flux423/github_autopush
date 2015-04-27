<?php
#!/bin/bash
`while read oldrev newrev ref
do
    if [[ $ref =~ .*/dev$ ]];
    then
        echo "DEV ref received.  Deploying master branch to DEV SERVER -- MAKE SURE TO TEST..."
        git --work-tree=/home/87928/domains/client.423interactive.com/html/github_autopush_dev --git-dir=/home/87928/domains/client.423interactive.com/html/github_autopush_dev/.git checkout -f

    else
        echo "Ref $ref successfully received.  Doing nothing: only the DEV branch may be deployed on this server."
    fi
done`