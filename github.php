<?php `
while read oldrev newrev ref
do
    if [[ $ref =~ .*/master$ ]];
    then
        echo "Master ref received.  Deploying master branch to LIVE SERVER -- MAKE SURE TO TEST..."
        git --work-tree=/home/87928/domains/client.423interactive.com/html/github_autopush --git-dir=/home/87928/domains/client.423interactive.com/html/github_autopush/.git checkout -f

    else
        echo "Ref $ref successfully received.  Doing nothing: only the master branch may be deployed on this server."
    fi
done

`;